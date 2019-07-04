<?php  

class laporan extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listLaporanBeli($limit='',$offset=''){
		$this->load->model("laporan_model"); 
		$data['judul']='LAPORAN PEMBELIAN';
	 	$data['table']=$this->laporan_model->listLaporanBeli($limit,$offset,1);
		$data['view']='laporan/listlaporan';
		$this->load->view('index',$data);
	}
	function listLaporanJual($limit='',$offset=''){
		$this->load->model("laporan_model"); 
		$data['judul']='LAPORAN PENJUALAN';
	 	$data['table']=$this->laporan_model->listLaporanJual($limit,$offset,1);
		$data['view']='laporan/listlaporan';
		$this->load->view('index',$data);
	}
	 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */