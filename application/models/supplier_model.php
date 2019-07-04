<?php
class supplier_model extends CI_Model{ 

	function supplier_model()
	{
		parent::__construct();
	}
	function listSupplier($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select *,supplier.id as id,supplier.nama as nama,barang.nama as nmobat from supplier
			left join barang on barang.id=supplier.obat
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
		function getSupplier($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from supplier where id='$id'");
			return $query->row();

		}	
		 
	function actsupplier(){
		$id=$this->input->post('id');
		$id_supplier=$this->input->post('id_supplier');
		$nama=$this->input->post('nama');
		$obat=$this->input->post('obat');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		 
		 
		$data=array(
	 	 'id_supplier'=>$id_supplier,
		 'nama'=>$nama,
		 'obat'=>$obat,
		 'alamat'=>$alamat,
		 'telepon'=>$telepon,
		);
		if($id==''){
			$this->db->trans_start();
			$this->db->insert('supplier',$data);
			$this->db->trans_complete(); } 
			else {
			$this->db->trans_start();
			$this->db->where('id',$id);
			$this->db->update('supplier', $data); 
			$this->db->trans_complete();
		}	
		
	}	
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>