<?php
class barang_model extends CI_Model{ 

	function barang_model()
	{
		parent::__construct();
	}
	function listBarang($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select *,barang.id as id,kategori.kategori,satuan.satuan  from barang 
			left join kategori on kategori.id=barang.kategori
			left join satuan on satuan.id=barang.satuan			
			order by id_barang DESC
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
		function getBarang($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from barang where id='$id'");
			return $query->row();

		}	
		function getKategoriBarang(){
			 
			$query=$this->db->query("select * from kategori");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}
		function getSatuanBarang(){
			 
			$query=$this->db->query("select * from satuan");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}
		function getObat(){
			 
			$query=$this->db->query("select * from barang");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}
 
	function actBarang(){
		$id=$this->input->post('id');
		$id_barang=$this->input->post('id_barang');
		$nama=$this->input->post('nama');
		$kategori=$this->input->post('kategori');
		$stok=$this->input->post('stok');
		$satuan=$this->input->post('satuan'); 
		$isi=$this->input->post('isi'); 
		$beli=$this->input->post('beli'); 
		$jual=$this->input->post('jual'); 
		$data=array(
	 	 'id_barang'=>$id_barang,
		 'nama'=>$nama,
		 'kategori'=>$kategori,
		 'stok'=>$stok,
		 'satuan'=>$satuan,
		 'isi'=>$isi,
		 'harga_beli'=>$beli,
		 'harga_jual'=>$jual,
		);
		if($id==''){
			$this->db->trans_start();
			$this->db->insert('barang',$data);
			$this->db->trans_complete(); } 
			else {
			$this->db->trans_start();
			$this->db->where('id',$id);
			$this->db->update('barang', $data); 
			$this->db->trans_complete();
		}	
		
	}	
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>