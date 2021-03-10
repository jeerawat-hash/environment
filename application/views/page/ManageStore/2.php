 

<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?php echo $page_name; ?></h4> 
					</div>
					<div class="row">




                     
  
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="">กลุ่มผู้ปฏิบัติงานขณะนี้  <p align="right" >  <button class="btn btn-warning"  id="btncreate" > สร้างกลุ่ม</button>  </p> </h4>  
									<p class="card-category">
									  
									       
								</p>
									 
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>ป้ายทะเบียน</th>
													<th>ผู้ดูเเล</th>
													<th>รายละเอียด</th>
													<th></th>
													 
												</tr>
											</thead> 
											<tbody> 
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td><button  id="btndelete"  class="btn btn-danger">  ลบออกจากกลุ่ม </button></td> 
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						




				 


								
					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-lg">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header  bg-success ">
							
							<h4 style="color:white"  >ลงทะเบียนผู้ปฏิบัติงาน</h4>

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">

							<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<div class="card-title">สร้างลงทะเบียนผู้ปฏิบัติงาน</div>
													</div>
													<div class="card-body">
														<div class="row">
														<div class="col-md-6 col-lg-6">
															<div class="form-group">
																<label for="smallSelect">ป้ายทะเบียน</label>
															
																<select class="form-control form-control-sm" id="smallSelect">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
														
																
															</div>
														</div>
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="data2">ผู้ดูเเล</label>
																	<select class="form-control form-control-sm" id="data2">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
																
																</div>
															</div>
															
														</div>
														<div class="row">
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="email2">รายละเอียด</label>
																	<input type="email" class="form-control" id="data3" placeholder="กรุณากรอกเบอร์โทร">
																	
																</div>
															</div>
															 
														</div>
													</div>

												</div>
											</div>
							</div>
							
							</div>
							<div class="modal-footer">
							<button type="button" id="btncreatedata" class="btn btn-warning"  >สร้าง</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
							</div>
						</div>
						
						</div>
					</div>
					 
					<!-- END  Modal -->
          		 
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					 
					<div class="copyright ml-auto">
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">p.jeerawat</a>
					</div>				
				</div>
			</footer>
		</div>










        <script>
            $(function(){

                $('#basic-datatables').DataTable({ });


            });
			$("#btncreate").click(function(){
				$('#myModal').modal('show'); 
              });
 
			  $("#btncreatedata").click(function(){
				  var smallSelect = $("#smallSelect").val();
				  var data2 = $("#data2").val(); 
				  var data3 = $("#data3").val(); 
				  if( smallSelect == ""){
					swal("กรุณากรอกป้ายทะเบียน", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});		 
					  $( "#data1" ).focus();
					  return false;
				  }
				  if( data2 == ""){
					swal("กรุณากรอกผู้ดูแล", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});		 
					  $( "#data2" ).focus();
					  return false;
				  } 
				  if( data3 == ""){
					swal("กรุณากรอกรายละเอียด", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});		 
					  $( "#data3" ).focus();
					  return false;
				  } 				  				  
				swal({
						title: "บันทึกเรียบร้อย",
						text: " ",
						icon: "success",
						buttons: {
							confirm: {
								text: "ตกลง",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
              });

			   
			  $("#btndelete").click(function(){
				  				  				  
				swal({
						title: "ลบรายการเรียบร้อย",
						text: " ",
						icon: "success",
						buttons: {
							confirm: {
								text: "ตกลง",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
              });
			   

        </script>