<?php  

class satuan extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listSatuan($limit='',$offset=''){
		$this->load->model("satuan_model"); 
		$data['judul']='DAFTAR SATUAN';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->satuan_model->listSatuan($limit,$offset,2);
		$config['base_url'] = base_url().'kategori/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->satuan_model->listSatuan($limit,$offset,1);
		$data['view']='satuan/listSatuan';
		$this->load->view('index',$data);
	}
	function form($id=''){
		$this->load->model("satuan_model"); 
		$data['judul']='Tambah satuan / Ubah id_satuan';
		if($id!=''){
		$info=$this->satuan_model->getSatuan($id);		 
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_satuan']=$info->id_satuan;
			$data['infouser']['satuan']=$info->satuan;
			 
		}
		$data['id']=$id;	
		$data['view']='satuan/form';
		$this->load->view('index',$data);
	}
	function act(){
		$this->load->model("satuan_model"); 
		$this->satuan_model->actSat();		 
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */