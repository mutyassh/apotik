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
 
											<div class="well grey">
												<div class="well-header">
													<h5>List Transaksi Customer </h5>
													</div>
													<div class="well-content">
													<div class="table_options top_options">
													</div>

 <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>Faktur </td>
                                            <td>Barang </td>
                                            <td>Jumlah</td>
                                            <td>Tanggal </td>
                                            <td>Customer</td>
                                            <td>Total</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									 	<?php  if(!empty($query)) { foreach($query as $row) { ?> 
                                        <tr>
                                            <td><?php echo $row->faktur ?></td>
                                            <td><?php echo $row->barang ?></td>
                                            <td><?php echo $row->jumlah ?></td>
                                            <td><?php echo $row->tanggal ?></td>
                                            <td><?php echo $row->customer ?></td>
                                            <td><?php echo $row->total ?></td>
                                             
                                            <td>
                                                <div class="btn-group">
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