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
									<h4 class="card-title">ข้อมูลรถเก็บขยะ</h4>
									<p class="card-category">
									แสดงผลข้อมูลรถเก็บขยะ
									<p align="right" >  <button class="btn btn-warning"  id="btncreate" > สร้างรายการข้อมูลรถเก็บขยะ</button>  </p>
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>ลำดับ</th>
													<th>ป้ายทะเบียน</th>
													<th>สัญญลักษณ์</th> 
												</tr>
											</thead> 
											<tbody> 
											 
											<?php  
												$i = 0;
												foreach($vehicled as $valuevehicled){
												$i+=1;
													
													?>
													


												<tr>
													<!--<td><?php echo $valuevehicled->ID; ?></td>-->
													<td><?php echo $i; ?></td>
													<td><?php echo $valuevehicled->LicensePlate; ?></td>
													<td><img width="20%" src="https://environment.webclient.me/temp/pin-<?php echo $valuevehicled->Color; ?>.svg" alt=""></td>  
													 
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
							
							<h4 style="color:white"  >ข้อมูลรถเก็บขยะ</h4>

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">

							<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<div class="card-title">สร้างข้อมูลรถเก็บขยะ</div>
													</div>
													<div class="card-body">
														<div class="row">
															 
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="email2">ป้ายทะเบียน</label>
																	<input type="email" class="form-control" id="data1" placeholder="กรุณากรอกป้ายทะเบียน">
																
																</div>
															</div>

															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="smallSelect">สี</label>
																	
																	<select class="form-control form-control-sm" id="data2">
																		<option value="0" selected>กรุณาเลือก</option> 
																		<option value="yello" >เหลือง</option> 
																		<option value="white" >ขาว</option> 
																		<option value="red" >แดง</option> 
																		<option value="purple" >ม่วง</option> 
																		<option value="green" >เขียว</option> 
																		<option value="blue" >ฟ้า</option>  
																	</select>
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

                $('#basic-datatables').DataTable({ });


            });
			$("#btncreate").click(function(){
				$('#myModal').modal('show'); 
              });

			  $("#btncreatesystem").click(function(){
				$('#myModal').modal('show'); 
              });
 
			  $("#btncreatedata").click(function(){

				  var data1 = $("#data1").val();
				  var data2 = $("#data2").val(); 
				  if( data1 == ""){
					swal("กรุณากรอกป้ายทะเบียน", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});		  
					  return false;
				  }
				  if( data2 == ""){
					swal("กรุณาเลือกสี", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});		  
					  return false;
				  } 



                 ///// INSERT  DATA ////
				 $.post("https://environment.webclient.me/index.php/ManageSystem/InsertDataVehicle"
                                  ,
                                   {
									LicensePlate :  data1, 
									Color    :  data2 
                                     
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
			   
			   
        </script>