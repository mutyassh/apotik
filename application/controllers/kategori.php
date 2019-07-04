<?php  

class kategori extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listKategori($limit='',$offset=''){
		$this->load->model("kategori_model"); 
		$data['judul']='KATEGORI';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->kategori_model->listKategori($limit,$offset,2);
		$config['base_url'] = base_url().'kategori/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->kategori_model->listKategori($limit,$offset,1);
		$data['view']='kategori/listKategori';
		$this->load->view('index',$data);
	}
	function form($id=''){
		$this->load->model("kategori_model"); 
		$data['judul']='Tambah kategori / Ubah kategori';
		if($id!=''){
		$info=$this->kategori_model->getKategori($id);		 
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_kategori']=$info->id_kategori;
			$data['infouser']['kategori']=$info->kategori;
			 
		}
		$data['id']=$id;	
		$data['view']='kategori/form';
		$this->load->view('index',$data);
	}
	function act(){
		$this->load->model("kategori_model"); 
		$this->kategori_model->actKat();		 
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */