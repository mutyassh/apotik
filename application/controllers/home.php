<?php  

class home extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
	function index($limit='',$offset=''){		 
		if($this->session->userdata('LOGIN')=='TRUE'){
		//$this->load->model("listpegawai_model"); 
		$data['judul']='Selamat Datang';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=20;//$this->listpegawai_model->count_pegawai();	
		$config['base_url'] = base_url().'home/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		//$data['query']=$this->listpegawai_model->getListPegawai($limit,$offset);
		$data['view']='dashboard';
		$this->load->view('index',$data); } else {
		redirect('home/loginPage');		
		}
	}
	function loginPage(){
		$this->load->view('login');
	}
	function loginAct(){
		$this->load->model("user_model");
		$this->user_model->cek();
	}
	function search($limit='',$offset=''){
	 	$this->load->model("listpegawai_model"); 
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->listpegawai_model->count_pegawai();	
		$config['base_url'] = base_url().'home/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
 
		$data['query']=$this->listpegawai_model->getListPegawai($limit,$offset);
		$this->load->view('cuti/data_pegawai',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('home/loginPage');		
	}
	function listBarang($limit='',$offset=''){
		$this->load->model("apotik_model"); 
		$data['judul']='Selamat Datang';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->apotik_model->listBarang($limit,$offset,2);
		$config['base_url'] = base_url().'home/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->apotik_model->listBarang($limit,$offset,1);
		$data['view']='barang/listbarang';
		$this->load->view('index',$data);
	}
	function formBarang($id=''){
		$this->load->model("apotik_model"); 
		$data['judul']='Tambah Barang / Ubah Barang';
		if($id!=''){
		$info=$this->apotik_model->getBarang($id);		 
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_barang']=$info->id_barang;
			$data['infouser']['nama']=$info->nama;
			$data['infouser']['kategori']=$info->kategori;
			$data['infouser']['stok']=$info->stok;
			$data['infouser']['satuan']=$info->satuan;
			$data['infouser']['isi']=$info->isi;
			$data['infouser']['harga_beli']=$info->harga_beli;
			$data['infouser']['harga_jual']=$info->harga_jual;
			$data['infouser']['expired']=$info->expired; 
		}
		$data['katBarang']=$this->apotik_model->getKategoriBarang();	
		$data['katSatuan']=$this->apotik_model->getSatuanBarang();	
		$data['id']=$id;	
		$data['view']='barang/formBarang';
		$this->load->view('index',$data);
	}
	function actBarang(){
		$this->apotik_model->actBarang();		 
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */