      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/themes/jquery.ui.all.css" type="text/css" />
  	<script>
	$(document).ready(function() {
			$( ".datepicker" ).datepicker();
	});

	function save(){
		$.ajax({
			url:'<?php echo base_url(); ?>barang/actBarang/',		 
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){ 
			  	if(data!=''){
					 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});					 
				} else {
					 window.location="<?php echo base_url() ?>barang/listbarang";
				}
			 }
		});		
	}
	function confirmdlg(){
					$("#confirm").dialog({
					 resizable: false,
					 modal: true,
					 title:"Info...",
					 draggable: false,
					 width: 'auto',
					 height: 'auto',
					 buttons: {
					 "Ya": function(){
						 save();   
						  $(this).dialog("close");
					  },
					  "Tutup": function(){
						   $(this).dialog("close");
						}
					 }
				  });
 
			}
			
	</script>
<form method="post" class="form1" id="form_barang" name="form_barang"/>
  <table>
    <tr>
      <td><input type="hidden" name="id" maxlength="5" size="5"  hidden value="<?php echo $id; ?>"/></td>
    </tr>
    <tr>
      <td>ID Barang </td>
      <td><input type="text" name="id_barang" maxlength="5" size="5"    value="<?php echo isset($infouser['id_barang']) ? $infouser['id_barang'] : ''; ?> "/>
        *</td>
    </tr>
    <tr>
      <td>Nama Barang </td>
      <td><input type="text" name="nama" maxlength="25" value="<?php echo isset($infouser['nama']) ? $infouser['nama'] : ''; ?>" />
        *</td>
    </tr>
    <tr>
      <td>Kategori </td>
      <td><select name="kategori">
        <?php  if(!empty($katBarang)) { foreach($katBarang as $row) { ?>
         
						?>
        <option value='<?php echo $row->id ?>'><?php echo $row->kategori ?></option>
        <?php	
					}
				}
				?>
      </select></td>
    <tr>
      <td>Stok </td>
      <td><input type="text" name="stok" maxlength="10" size="7" value="<?php echo isset($infouser['stok']) ? $infouser['stok'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td><select name="satuan">
        <?php  if(!empty($katSatuan)) { foreach($katSatuan as $row2) { ?>
         
						?>
        <option value='<?php echo $row2->id ?>'><?php echo $row2->satuan ?></option>
        <?php	
					}
				}
				?>
      </select></td>
      </td>
    </tr>
    <tr>
      <td>Isi </td>
      <td><input type="text" name="isi" maxlength="10" size="5" value="<?php echo isset($infouser['isi']) ? $infouser['isi'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td>Harga Beli </td>
      <td><input type="text" name="beli" maxlength="15" size="10" value="<?php echo isset($infouser['harga_beli']) ? $infouser['harga_beli'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td>Harga Jual</td>
      <td><input type="text" name="jual" maxlength="15" size="10" value="<?php echo isset($infouser['harga_jual']) ? $infouser['harga_jual'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td><a style="margin-bottom:5px;" onclick="return confirmdlg()" href="#" class="dark_green btn">Simpan</a> <a style="margin-bottom:5px;" href="<?php echo base_url() ?>home" class="dark_blue btn">Kembali</a></td>
    </tr>
</table>
</form>
 <div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>     