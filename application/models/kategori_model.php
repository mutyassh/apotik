<?php
class kategori_model extends CI_Model{ 

	function kategori_model()
	{
		parent::__construct();
	}
	function listKategori($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select *  from Kategori 
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
		function getKategori($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from kategori where id='$id'");
			return $query->row();

		}	
	  
 
	function actKat(){
		$id=$this->input->post('id');
		$id_kategori=$this->input->post('id_kategori');
		$nama=$this->input->post('kategori');
		 
		$data=array(
	 	 'id_kategori'=>$id_kategori,
		 'kategori'=>$nama,
		);
		if($id==''){
			$this->db->trans_start();
			$this->db->insert('kategori',$data);
			$this->db->trans_complete(); } 
			else {
			$this->db->trans_start();
			$this->db->where('id',$id);
			$this->db->update('kategori', $data); 
			$this->db->trans_complete();
		}	
		
	}	
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>