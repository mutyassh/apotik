<?php  

class supplier extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listSupplier($limit='',$offset=''){
		$this->load->model("supplier_model"); 
		$data['judul']='DATA SUPPLIER';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->supplier_model->listSupplier($limit,$offset,2);
		$config['base_url'] = base_url().'barang/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->supplier_model->listSupplier($limit,$offset,1);
		$data['view']='supplier/listsupplier';
		$this->load->view('index',$data);
	}
	function form($id=''){
		$this->load->model("supplier_model"); 
		$this->load->model("barang_model"); 
		$data['judul']='Tambah Supplier / Ubah Supplier';
		if($id!=''){
		$info=$this->supplier_model->getSupplier($id);		 
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_supplier']=$info->id_supplier;
			$data['infouser']['nama']=$info->nama;
			$data['infouser']['obat']=$info->obat;
			$data['infouser']['alamat']=$info->alamat;
			$data['infouser']['telepon']=$info->telepon;
		}
		$data['getObats']=$this->barang_model->getObat();	
		$data['id']=$id;	
		$data['view']='supplier/formsupplier';
		$this->load->view('index',$data);
	}
	function actsupplier(){
		$this->load->model("supplier_model"); 
		$this->supplier_model->actsupplier();		 
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */