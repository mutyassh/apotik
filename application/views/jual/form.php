      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/themes/jquery.ui.all.css" type="text/css" />
  	<script>
	$(document).ready(function() {
			$( ".datepicker" ).datepicker();
	});
	function next(){
		$jum=$("#jumbeli").val();
		if($jum=='') {
			alert("JUMLAH TIDAK BOLEH KOSONG"); 	
			return false;
		} else if($jum=='0'){
				alert("JUMLAH TIDAK BOLEH 0"); 	
				return false;
		} else {
			$.ajax({
			url:'<?php echo base_url(); ?>jual/nextForm/',		 
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){ 
			  	$("#contentform").html(data);
			 }
		});			
			return false;
		}
	}
	function save(){
		$.ajax({
			url:'<?php echo base_url(); ?>jual/act/',		 
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){ 
			  	if(data!=''){
					 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});					 
				} else {
					alert("Sukses Memasukan data Penjualan");
					window.location="<?php echo base_url() ?>jual";
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
	<div id="contentform">
	  	<?php echo $table ?>
	</div>
</form>
 <div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>     