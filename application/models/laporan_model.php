<?php
class laporan_model extends CI_Model{ 

	function laporan_model()
	{
		parent::__construct();
	}
	function listLaporanBeli($limit='',$offset='',$id=''){
	$table='';
	$table=' <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>Faktur </td>
                                            <td>Barang </td>
                                            <td>Jumlah</td>
                                            <td>Tanggal </td>
                                            <td>supplier</td>
                                            <td>Total</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>';
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from pembelian group by sesbeli");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					 $table.=' <tr>
                                            <td>'. $row->faktur .'</td>
                                            <td>'. $row->barang .'</td>
                                            <td>'. $row->jumlah .'</td>
                                            <td>'. $row->tanggal.'</td>
                                            <td>'. $row->supplier .'</td>
                                            <td>'. $row->total .'</td>
                                </tr>';
				}
				if($id==1){
				$table.='</table>';
				return $table;} else {
				return $query->num_rows() ;
				}
			}

		}
	function listLaporanJual($limit='',$offset='',$id=''){
			$table='';
	$table=' <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>Faktur </td>
                                            <td>Barang </td>
                                            <td>Jumlah</td>
                                            <td>Tanggal </td>
                                            <td>customer</td>
                                            <td>Total</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>';
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from jual group by sesjual");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					 $table.=' <tr>
                                            <td>'. $row->faktur .'</td>
                                            <td>'. $row->barang .'</td>
                                            <td>'. $row->jumlah .'</td>
                                            <td>'. $row->tanggal.'</td>
                                            <td>'. $row->customer .'</td>
                                            <td>'. $row->total .'</td>
                                </tr>';
				}
				if($id==1){
				$table.='</table>';
				return $table;} else {
				return $query->num_rows() ;
				}
			}

		}	
	 
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>