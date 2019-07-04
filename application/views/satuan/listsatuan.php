	<script type="text/javascript">
	$(document).ready(function() { 
	  $(function() {
		applyPagination();
		function applyPagination() {
		  $(".pages a").click(function() {
		   var url = $(this).attr("href");
		   $.ajax({
			  type: "POST",
			  data: "",
			  url: url,
			  beforeSend: function() {
				$(".well-content").html("<div class='loading_div'><img src='<?php echo base_url() ?>img/loading.gif'></div>");
			  },
			  success: function(msg) {
				$("#tabledata").html(msg);
				<!-- applyPagination(); -->
			  }
			});
			 return false;
			});
		}
	  }); 
	});
	  function detailData(id){
		 $("#tr"+id).toggle();
		 $.ajax({
			url:'<?php echo base_url(); ?>cuti/detailPegawai/'+id,		 
			type:'POST',
			data:$('#frmsave').serialize(),
			success:function(data){ 
				$("#detail"+id).html('');  
				$("#detail"+id).append(data);  
			}  
		});		
	 }
	</script>
 <div id="tabledata">

<div class="span12">
 <a style="margin-bottom:5px;" href="<?php echo base_url() ?>satuan/form/" class="dark_green btn">Tambah Data Satuan</a>
											<div class="well grey">
												<div class="well-header">
													<h5>List Satuan </h5>
													</div>
													<div class="well-content">
													<div class="table_options top_options">
													</div>

 <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>ID Satuan</td>
                                            <td>Satuan </td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									 	<?php  if(!empty($query)) { foreach($query as $row) { ?> 
                                        <tr>
                                            <td style="text-align:center;font-weight:bold">
											<span class="label label-warning"><?php echo $row->id_satuan ?></span>
											</td>
                                            
                                            <td><?php echo $row->satuan ?></td>
                                       
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn" href="<?php echo base_url().'satuan/form/'.$row->id ?>">
													<i class="icon-arrow-right"></i></a>
                                                    <a class="btn" href="#"><i class="icon-trash"></i></a>                                                </div>                                            </td>
                                        </tr>
										
										</tr>
										<?php }} ?>
                                    </tbody>
                                </table><br>
								 <p class="pages"> <?php echo $this->pagination->create_links(); ?></p>		
								 </div>
								 
								 <div class="table_options bottom_options">
													</div>
											  </div>
											</div>
										</div>