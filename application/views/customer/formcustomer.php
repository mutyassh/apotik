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
			url:'<?php echo base_url(); ?>supplier/actsupplier/',		 
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){ 
			  	if(data!=''){
					 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});					 
				} else {
					 window.location="<?php echo base_url() ?>supplier/listsupplier";
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
      <td>ID Supplier </td>
      <td><input type="text" name="id_supplier" maxlength="5" size="5"    value="<?php echo isset($infouser['id_supplier']) ? $infouser['id_supplier'] : ''; ?> "/>
        *</td>
    </tr>
    <tr>
      <td>Nama  </td>
      <td><input type="text" name="nama" maxlength="25" value="<?php echo isset($infouser['nama']) ? $infouser['nama'] : ''; ?>" />
        *</td>
    </tr>
    <tr>
      <td>Obat </td>
      <td><select name="obat">
        <?php  if(!empty($getObats)) { foreach($getObats as $row) { ?>
         
						?>
        <option value='<?php echo $row->id ?>'><?php echo $row->nama ?></option>
        <?php	
					}
				}
				?>
      </select></td>
    <tr>
      <td>Alamat</td>
      <td><input type="text" style="width:300px;" name="alamat" maxlength="100" size="7" value="<?php echo isset($infouser['alamat']) ? $infouser['alamat'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><input type="text"  style="width:200px;" name="telepon" maxlength="100" size="5" value="<?php echo isset($infouser['telepon']) ? $infouser['telepon'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td><a style="margin-bottom:5px;" onclick="return confirmdlg()" href="#" class="dark_green btn">Simpan</a> <a style="margin-bottom:5px;" href="<?php echo base_url() ?>home" class="dark_blue btn">Kembali</a></td>
    </tr>
</table>
</form>
<div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>     