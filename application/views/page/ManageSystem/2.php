 

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
									<h4 class="card-title">ข้อมูลถังขยะ</h4>
									<p class="card-category">
									แสดงผลข้อมูลถังขยะ
									<p align="right" >  <button class="btn btn-warning"  id="btncreate" > สร้างรายแสดงผลข้อมูลถังขยะ</button>  </p>
								
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
												   <th>ลำดับ</th> 
													<th>ความจุ</th>
													<th>สี</th>
													<th>ตำเเหน่ง</th>
													<th>QR Code</th>
												</tr>
											</thead> 
											<tbody id="TableTrashDetail"> 


												<?php  
												$i = 0;
												foreach($trash as $valuetash){
													$i+= 1;
													?>
													 
												<tr>
													<!--<td><?php echo $valuetash->ID; ?></td> -->
													<td><?php echo $i; ?></td>
													<td><?php echo $valuetash->Capacity; ?> ลิตร</td>
													<td><?php echo $valuetash->Color; ?></td>
													<td><?php echo $valuetash->Remark; ?></td>
													<td><button  class="btn btn-danger BtnTrashQR" data-id="<?php echo $valuetash->ID; ?>"> เรียกดู QR Code  </button> </td>
													 
												</tr>
 

												<?

												}
												 
												?>

 
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
						
						<h4 style="color:white"  >แสดงผลข้อมูลถังขยะ</h4>

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
					 
						<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-header">
													<div class="card-title">แสดงผลข้อมูลถังขยะ</div>
												</div>
												<div class="card-body">
													<div class="row">
														 
														<div class="col-md-6 col-lg-6">
															<div class="form-group">
																<label for="email2">สี</label>
																<input type="email" class="form-control" id="data1" placeholder="กรุณากรอกสี">
															
															</div>
														</div>
														<div class="col-md-6 col-lg-6">
															<div class="form-group">
																<label for="email2">ความจุ(ลิตร)</label>
																<input type="email" class="form-control" id="data2" placeholder="กรุณากรอกความจุ">
																
															</div>
														</div>
														
													</div>
													<div class="row">
														 
														<div class="col-md-6 col-lg-6">
															<div class="form-group">
																<label for="email2">ตำเเหน่งที่ตั้ง</label>
																<input type="email" class="form-control" id="data3" placeholder="กรุณากรอกตำเเหน่ง">
																
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

					
				<!-- Modal -->
				<div class="modal fade" id="ModalQrCode" role="dialog">
					<div class="modal-dialog modal-lg">
					
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header  bg-success ">
						
						<h4 style="color:white"  >ข้อมูล QR Code</h4>

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
					 
						<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-header">
													<div class="card-title">ข้อมูล QR Code</div>
												</div>
												<div class="card-body">
													<div class="row text-center">
															
														<div class="col-12">

															<img id="QrAuth" src="" alt="">

														</div> 
														  
													</div>
													 
												</div>

											</div>
										</div>
						</div>
						
						</div>
						<div class="modal-footer"> 
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
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">DEV.</a>
					</div>				
				</div>
			</footer>
		</div>




	<script>

		$(function(){



			 $("#TableTrashDetail").on("click",".BtnTrashQR",function(){

				var TrashID = $(this).attr("data-id");
				$("#ModalQrCode").find("#QrAuth").attr("src","https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://liff.line.me/1655702904-El3x46Gk?key="+TrashID);
				$('#ModalQrCode').modal('show'); 

			}); 



		});
 
	</script>




        <script>


            $(function(){

				$('#basic-datatables').DataTable({ });

				$("#btncreate").click(function(){
					$('#myModal').modal('show'); 
				});
   
				$("#btncreatedata").click(function(){
					var data1 = $("#data1").val();
					var data2 = $("#data2").val();
					var data3 = $("#data3").val();
					if( data1 == ""){ 
						swal("กรุณากรอกสี", {
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
						swal("กรุณากรอกความจุ", {
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
						swal("กรุณากรอกตำเเหน่ง", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		 
						$( "#data3" ).focus();
						return false;
					}


					///// INSERT  DATA ////
					$.post("https://environment.webclient.me/index.php/ManageSystem/InsertDataTrash"
									,
									{
										Capacity :  data2, 
										Color    :  data1,
										Remark    :  data3 
										
										}
									,
										function(data,status,response){  
										console.log(data);
									if (status == "success") 
										{ 
												
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

											location.reload();
											//$("#myModal").modal("hide");
										}
										});
					
					///// INSERT  DATA ////	   
					
				});
			
			
			}); 
			   
        </script>