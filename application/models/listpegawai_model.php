<?php
class listpegawai_model extends CI_Model{ 

	function listpegawai_model()
	{
		parent::__construct();
	}
	/* GET ARTIKEL */
		function getListPegawai($limit='',$offset=''){
			$menus='';
			$status=$this->session->userdata('STATUS');
			$addTag="";
			if($status!=0){
			$addTag="where t_pegawai.nik='".$this->session->userdata('NIK')."'";	
			}
			$judul=$this->input->post('judul');
			$query=$this->db->query("select t_pegawai.id,t_pegawai.nik,t_pegawai.nama,m_jabatan.nama_jabatan,m_unit_kerja.nama_unit_kerja,m_cabang.nama_cabang from t_pegawai
			LEFT JOIN m_jabatan ON t_pegawai.kd_jabatan=m_jabatan.kd_jabatan
            LEFT JOIN m_unit_kerja ON t_pegawai.kd_unit_kerja=m_unit_kerja.kd_unit_kerja
            LEFT JOIN m_cabang ON t_pegawai.kd_cabang=m_cabang.kd_cabang 
			$addTag
			ORDER BY id DESC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
		}
	/* --- */
	function count_pegawai($id=''){
		$jumlah='';
		$judul=$this->input->post('judul');
		$status=$this->session->userdata('STATUS');
		$addTag="";
		if($status!=0){
		$addTag="where t_pegawai.nik='".$this->session->userdata('NIK')."'";	
		}
		$query=$this->db->query("select count(1) as jumlah from t_pegawai $addTag");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
				$jumlah=$data->jumlah;
				}
				return $jumlah;
			}
	}
	function getSisaCuti($nik){
		$hasil='';
		$maxcuti='';
        $q = $this->db->query("select  (SELECT DATEDIFF(tgl_selesai,tgl_mulai) from t_cuti where id=a.id) as dateDiff  from t_cuti a  where nik='$nik'
		and tgl_mulai like'%".date('y')."%' and tgl_selesai like'%".date('y')."%'
		");
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $data) {
				$hasil =$hasil+ $data->dateDiff;
			}
		}
		$q2 = $this->db->query("select maxcuti from t_opsi");
		if ($q2->num_rows() > 0) {
			foreach ($q2->result() as $row) {
				$maxcuti =$row->maxcuti;
			}
		}
		if($maxcuti-$hasil > 0){
		return $maxcuti-$hasil; } else if($maxcuti-$hasil < 0){
		return 0;
		}
	}	
	
	function update(){
		$id=$this->input->post('id');
		$kat=$this->input->post('kategori');
		if($kat==''){
			echo"Kategori Tidak Boleh Kosong !!!!";
			return false;	
		}		
		$data=array(
			'kategori'=>$kat,
		);
		
		$this->db->trans_start();
		$this->db->where('id',$id);
		$this->db->update('menu', $data); 
		$this->db->trans_complete();
		echo "Sukses Menyimpan Data";
	}	
	function aksi(){
		$kat=$this->input->post('kategori');
		$isi=$this->input->post('isi');
		$judul=$this->input->post('judul');
		$idartikel=$this->input->post('idartikel');
		
		if($judul==''){
			echo"Judul Tidak Boleh Kosong !!!!";
			return false;	
		} elseif($isi==''){
			echo"Isi Artikel Tidak Boleh Kosong !!!!";
			return false;	
		}		
		$data=array(
			'judul'=>$judul,
			'kategori'=>$kat,
			'isi'=>$isi,
			'tanggal_buat'=>date('Y-m-d')
		);
		
		if($idartikel==''){
		$this->db->trans_start();
		$this->db->insert('artikel',$data);
		$this->db->trans_complete();
		} else {
		$this->db->trans_start();
		$this->db->where('id',$idartikel);
		$this->db->update('artikel', $data); 
		$this->db->trans_complete();	
		}
	}	
    function info($id=''){
	    $query=$this->db->query("select * from artikel where id='$id'");
		return $query->row();
   }

	function delete($id=''){
		$this->db->delete('artikel', array('id' => $id)); 
		echo"Sukses Hapus Data...";
	}

}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>