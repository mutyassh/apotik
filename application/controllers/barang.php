<?php  
 
class barang extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listBarang($limit='',$offset=''){
		$this->load->model("barang_model"); 
		$data['judul']='DATA BARANG';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->barang_model->listBarang($limit,$offset,2);
		$config['base_url'] = base_url().'barang/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->barang_model->listBarang($limit,$offset,1);
		$data['view']='barang/listbarang';
		$this->load->view('index',$data);
	}
	function formBarang($id=''){
		$this->load->model("barang_model"); 
		$data['judul']='Tambah Barang / Ubah Barang';
		if($id!=''){
		$info=$this->barang_model->getBarang($id);		 
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
		$data['katBarang']=$this->barang_model->getKategoriBarang();	
		$data['katSatuan']=$this->barang_model->getSatuanBarang();	
		$data['id']=$id;	
		$data['view']='barang/formBarang';
		$this->load->view('index',$data);
	}
	function actBarang(){
		$this->load->model("barang_model"); 
		$this->barang_model->actBarang();		 
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */