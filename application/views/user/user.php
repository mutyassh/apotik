   <link rel="stylesheet" href="<?php echo base_url();?>css/themes/jquery.ui.all.css" type="text/css" />

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
			url:'<?php echo base_url(); ?>user/detail/'+id,		 
			type:'POST',
			data:$('#frmsave').serialize(),
			success:function(data){ 
				$("#detail"+id).html('');  
				$("#detail"+id).append(data);  
			}  
		});		
	 }
	 function getdata(){
	 	  $.ajax({
			  type: "POST",
			  data: "",
			  url:'<?php echo base_url(); ?>user/search/',	
			  beforeSend: function() {
				$(".well-content").html("<div class='loading_div'><img src='<?php echo base_url() ?>img/loading.gif'></div>");
			  },
			  success: function(msg) {
				$("#tabledata").html(msg);
			  }
			});
	 }
 </script>
<div id="tabledata">
<div class="span12">
 <br>
											<div class="well grey">
												<div class="well-header">
													<h5>List Pegawai </h5>
													</div>
										
													<div class="well-content">
													<div class="table_options top_options">
													</div>

 <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nik  </th>
                                            <th>Username</th>
                                            <th>Status </th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
									 	<?php  if(!empty($query)) { foreach($query as $row) { ?> 
                                        <tr>
                                            <td>
											<img onclick="return detailData(<?php echo $row->id ?>)" style="height:15px;margin-left:10px;;width:15px" src="<?php echo base_url()?>img/plus.png" 
											alt="Avatar"></td>
                                            <td style="text-align:center;font-weight:bold">
											<span class="label label-warning"><?php echo $row->nik ?></span>
											</td>
                                            <td><?php echo $row->username ?></td>
                                           
                                            
                                            
											<td>
											<?php if($row->status=='0'){ ?>
											<span class="label  label-success">Administrator</span>
											<?php } else if ($row->status=='1') { ?>
											<span class="label  label-success">User</span>
											<?php }?>
											</td>
                                            
                                        </tr>
										<tr style="display:none" id="tr<?php echo $row->id ?>">
											<td colspan="8" id="detail<?php echo $row->id ?>">
										</td>
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