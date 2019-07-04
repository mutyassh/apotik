<?php  

class customer extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function listCustomer($limit='',$offset=''){
		$this->load->model("customer_model"); 
		$data['judul']='DATA TRANSAKSI CUSTOMER';
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->customer_model->listCustomer($limit,$offset,2);
		$config['base_url'] = base_url().'barang/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->customer_model->listCustomer($limit,$offset,1);
		$data['view']='customer/listcustomer';
		$this->load->view('index',$data);
	}
 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */