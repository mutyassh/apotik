<?php
class satuan_model extends CI_Model{ 

	function satuan_model()
	{
		parent::__construct();
	}
	function listSatuan($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select *  from satuan 
			order by id DESC
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
		function getSatuan($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from satuan where id='$id'");
			return $query->row();

		}	
	  
 
	function actSat(){
		$id=$this->input->post('id');
		$id_satuan=$this->input->post('id_satuan');
		$nama=$this->input->post('satuan');
		 
		$data=array(
	 	 'id_satuan'=>$id_satuan,
		 'satuan'=>$nama,
		);
		if($id==''){
			$this->db->trans_start();
			$this->db->insert('satuan',$data);
			$this->db->trans_complete(); } 
			else {
			$this->db->trans_start();
			$this->db->where('id',$id);
			$this->db->update('satuan', $data); 
			$this->db->trans_complete();
		}	
		
	}	
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>