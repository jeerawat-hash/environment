 

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
									<h4 class="">กลุ่มผู้ปฏิบัติงานขณะนี้  
									 <p align="right" >  <button class="btn btn-warning"  id="btncreate" > สร้างรายละเอียดกลุ่มรถเก็บขยะ</button>
								 <button class="btn btn-warning"  id="btncreate1" > จัดผู้ปฏิบัติงานลงกลุ่ม</button>  </p> </h4>  
									<p class="card-category">
									  
									       
								</p>
									 
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>ป้ายทะเบียน</th>
													<th>สัญญลักษณ์</th>
													<th>สมาชิก</th>
													<th>รายละเอียด</th>
													<th></th>
													 
												</tr>
											</thead> 
											<tbody id="MemberGroupDetail"> 

 												<?php 

												foreach($MemberGroup as $Member){
													?>

												<tr>
													<td><?php echo $Member->LicensePlate; ?></td>
													<td><img width="20%" src="https://environment.webclient.me/temp/pin-<?php echo $Member->Color;  ?>.svg" alt=""></td>
													<td><?php echo $Member->Name; ?></td>
													<td><?php echo $Member->Remark; ?></td>
													<td><button class="btn btn-danger btnUngroup" data-WorkGroupID="<?php echo $Member->WorkGroupID; ?>" data-MemberID="<?php echo $Member->MemberID; ?>">  ลบออกจากกลุ่ม </button></td> 
												</tr>



												<?php
												} 
 												?>
												 
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						




				 


								
					<!-- Modal -->
					<div class="modal fade" id="CreateGroup" role="dialog">
						<div class="modal-dialog modal-lg">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header  bg-success ">
							
							<h4 style="color:white"  >สร้างกลุ่มการปฏิบัติงาน</h4>

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">

							<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<div class="card-title">ระบุรายละเอียดการปฏิบัติงานของรถเก็บขยะ</div>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="smallSelect">ป้ายทะเบียน</label>
																
																	<select class="form-control form-control-sm" id="LicensePlate">
																		<option value="0" selected>กรุณาเลือก</option> 
																		<?php 
																		foreach($VehicleNotCreate as $Vehicle){
																		?>

																			<option value="<?php echo $Vehicle->ID; ?>"><?php echo $Vehicle->LicensePlate; ?></option> 

																		<?php 	
																		}
																		
																		
																		?>

																	</select>
															
																	
																</div>
															</div>
															 
														 
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="Remark">รายละเอียด</label>
																	<input type="email" class="form-control" id="Remark" placeholder="กรุณากรอกรายละเอียด">						
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
					<div class="modal fade" id="GroupMember" role="dialog">
						<div class="modal-dialog modal-lg">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header  bg-success ">
							
							<h4 style="color:white"  >จัดกลุ่มผู้ปฏิบัติงาน</h4>

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">

							<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<div class="card-title">จัดกลุ่มผู้ปฏิบัติงาน</div>
													</div>
													<div class="card-body">
														<div class="row">
														<div class="col-md-6 col-lg-6">
															<div class="form-group">
																<label for="smallSelect">ป้ายทะเบียน</label>
															
																<select class="form-control form-control-sm" id="WorkGroupID">
																<option value="0" selected>กรุณาเลือก</option> 
 																	<?php
															  
																	 foreach($GroupData as $Group){
																	 ?>

																			<option value="<?php echo $Group->ID; ?>"><?php echo $Group->LicensePlate." ".$Group->Remark; ?></option> 

																	<?php 	
																	 }
																	  
																	 ?>
																</select>
														
																
															</div>
														</div>
															<div class="col-md-6 col-lg-6">
																<div class="form-group">
																	<label for="data2">ผู้ปฏิบัติงาน</label>
																	<select class="form-control form-control-sm" id="MemberID">
																	<option value="0" selected >กรุณาเลือก</option> 
 																	<?php
															  
																	 foreach($MemberNotGroup as $Member){
																	 ?>

																			<option value="<?php echo $Member->ID; ?>"><?php echo $Member->Name; ?></option> 

																	<?php 	
																	 }
																	  
																	 ?>
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
							<button type="button" id="btncreatedata1" class="btn btn-warning"  >บันทึก</button>
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
				  
				$("#MemberGroupDetail").on("click",'.btnUngroup',function(){
					var WorkGroupID = $(this).attr("data-WorkGroupID");
					var MemberID = $(this).attr("data-MemberID");
 
					$.post("https://environment.webclient.me/index.php/ManageStore/DeleteMemberInGroup",
					{
						WorkGroupID : WorkGroupID,
						MemberID : MemberID
					},
					function(data){

						if(data == 1){
		
							swal({
								title: "ลบรายการสำเร็จ",
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
 
						}else{

							swal({
								title: "ผิดพลาด",
								text: " ",
								icon: "error",
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
							return false;

						}
 
					});

				});








				$("#btncreate").click(function(){
					$('#CreateGroup').modal('show'); 
				});
	
				$("#btncreate1").click(function(){
					$('#GroupMember').modal('show'); 
				});

				$("#CreateGroup").find("#btncreatedata").click(function(){
					var LicensePlate = $("#LicensePlate").val();
					var MemberID = $("#MemberID").val(); 
					var Remark = $("#Remark").val();  
					if( LicensePlate == "0"){
						swal("กรุณาเลือกทะเบียน", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		  
						return false;
					}
					/*if( MemberID == "0"){
						swal("กรุณากรอกผู้ดูแล", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		  
						return false;
					} */
					if( Remark == ""){
						swal("กรุณากรอกรายละเอียด", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		  
						return false;
					} 			
					 
					$.post("https://environment.webclient.me/index.php/ManageStore/CreateGroup",
					{
						VehicleID : LicensePlate,
						Remark : Remark
					},
					function(data){

						if(data == 1){
		
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

							
						}else{

							swal({
								title: "ผิดพลาด",
								text: " ",
								icon: "error",
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
							return false;

						}


					});

 
				});

				$("#GroupMember").find("#btncreatedata1").click(function(){
					var WorkGroupID = $("#WorkGroupID").val();
					var MemberID = $("#MemberID").val();  
					if( WorkGroupID == "0"){
						swal("กรุณาเลือกทะเบียน", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		  
						return false;
					}
					if( MemberID == "0"){
						swal("กรุณาระบุผู้ปฏิบัติงาน", {
							buttons: {        			
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});		  
						return false;
					} 



					$.post("https://environment.webclient.me/index.php/ManageStore/InsertGroupDetail",
					{
						WorkGroupID : WorkGroupID,
						MemberID : MemberID
					},
					function(data){

						if(data == 1){
		
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
 
						}else{

							swal({
								title: "ผิดพลาด",
								text: " ",
								icon: "error",
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
							return false;

						}
 
					});
 
				});
 
				 
            });
			
        </script>