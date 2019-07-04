<?php  

class jual extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function index($limit='',$offset=''){
		 $data['judul']='Penjualan';
		 $data['view']='jual/form';
		 $data['table']=$this->generateFaktur();
		 $this->load->view('index',$data);
	}
	function generateformBeli(){
		$table='';
		$table.='';
		return $table; 
	}
	function generateFaktur(){
		$table='';
		$table.='<table>';
		$table.='<tr>';
		$table.='<tr><input type="text" id="jumbeli" name="jumbeli">  &nbsp; &nbsp; <a onclick="return next()" style="margin-bottom:0px;" href="'.base_url().'jual/nextform" class="dark_green btn">Next</a></td>';
		$table.='</tr>';
		$table.='</table>';
		return $table; 
	}
	 
	function generateListBeli(){
		$this->load->model("jual_model"); 
		return $this->jual_model->generateListBeli();
	}
	function generateForm(){
		$table='';
		 
		$listObat=$this->generateListBeli();
		$sesjual='<input type="hidden" id="sesjual" name="sesjual" value="'.date("YmdHms").'">';
		$table.=$sesjual;
		$table.='<table border="0">
					<tbody><tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><input type="date" name="tanggal" value="<?php echo $table->tanggal;?>"></td>
					</tr>
					<tr>
						<td>No Faktur</td>
						<td>:</td>
						<td><input type="text" name="faktur" size="7" maxlength="7"></td>
						
					</tr>
					<tr>
						<td>Customer</td>
						<td>:</td>
						<td>
						<input type="text" id="customer" name="customer">
						</td>
					</tr><tr>
						<td colspan="3"><br><hr><br></td>
					</tr>
					<tr>
						<td align="center">Barang</td>
						<td></td>
						<td align="center">Jumlah</td>
					</tr>
						 '.$listObat.'
					<tr>
						<td><a onclick="return save()" style="margin-bottom:0px;" href="#" class="dark_green btn">Simpan</a></td>
					</tr>
				</tbody></table>';
		return $table; 
	}
	function nextForm(){
		$jumbeli=$this->input->post('jumbeli');
		$table='';
		$table.=$this->generateForm();
		echo $table;
	}
	function act(){
		$this->load->model("jual_model"); 
		return $this->jual_model->act();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */