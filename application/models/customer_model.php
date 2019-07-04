<?php
class customer_model extends CI_Model{ 

	function customer_model()
	{
		parent::__construct();
	}
	function listCustomer($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from jual where customer !=''
			LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				if($id==1){
				return $datac;} else {
				return $query->num_rows() ;
				}
			}

		}
	 
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>