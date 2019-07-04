<?php
class jual_model extends CI_Model{ 

	function jual_model()
	{
		parent::__construct();
	}
	 
	function generateListBeli(){
		$jumbeli=$this->input->post('jumbeli');
		$table='';
		$i=0;
		for($i=0;$i<$jumbeli;$i++){
		$listobat=$this->generateListObat($i);
			$table.='<tr>
						<td>'.$listobat.'
						</td>
						<td>:</td>
						<td><input type="text" id="jumlah[]" name="jumlah[]" value="0"></td></tr>';
		}
		return $table;
	}
	function generateListObat($id){
			$select='';
			$select.='<select  id="lstobat" name="lstobat[]">';
			$query=$this->db->query("select *  from barang ");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$select.='<option value="'.$data->id_barang.'">'.$data->nama.'</option>';
				}
			}
			$select.='</select>';
			return $select;
	}
	function gethargaobat($id,$jumObat){
		$query=$this->db->query("select harga_beli  from barang where id_barang='$id'");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					 $harga=$data->harga_beli*$jumObat;
				}
			}
			 
			return $harga;
	}
	function act(){
		$tanggal=$this->input->post('tanggal');
		$faktur=$this->input->post('faktur');
		$customer=$this->input->post('customer');
		$sesjual=$this->input->post('sesjual');
		$i=0;
		$jumlahBeli=count($this->input->post('jumlah'));
		$ljumObat=$this->input->post('jumlah');
		$lObat=$this->input->post('lstobat');
		
		for($i;$i<$jumlahBeli;$i++){
			$jumObat = $ljumObat[$i];
			$Obat = $lObat[$i];
			$getHarga=$this->gethargaobat($Obat,$jumObat);
			$data=array(
			 'barang'=>$Obat,
			 'jumlah'=>$jumObat,
			 'faktur'=>$faktur,
			 'tanggal'=>$tanggal,
			 'customer'=>$customer,
			 'total'=>$getHarga*$jumObat,
			 'sesjual'=>$sesjual,
			);
			$this->db->trans_start();
			$this->db->insert('jual',$data);
			$this->db->trans_complete();
			
		}
			
	}
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>