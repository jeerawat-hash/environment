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
									<!--<h4 class="card-title">ผู้ปฏิบัติงาน</h4>
									<p class="card-category">
									แสดงผลข้อมูลผู้ปฏิบัติงาน  -->
									<h4 class="card-title">ผู้ใช้งานระบบ</h4>
									<p class="card-category">
									แสดงผลข้อมูลบุคคลากร 
									<p align="right" >  <button class="btn btn-warning"  id="btncreate" > เพิ่มรายการการผู้ปฏิบัติงาน</button>  </p>
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
												<th>ชื่อ</th>
												<th>เบอร์โทร</th>
												<th></th>
												</tr>
											</thead> 
											<tbody id="TableAuthenBDetail"> 

											<?php  
												
												foreach($member as $valuemember){

													$btn = "ลงทะเบียนแล้ว";
													if($valuemember->LineID == ""){

														#$btn = '<button  class="btn btn-danger AuthenB" data-MemberID = "'.$valuemember->ID.'"> ยืนยันตัวตน  </button>';
														$btn = "ยังไม่ถูกเปิดใช้งาน";

													}
 
													?> 
												<tr>
													<td><?php echo $valuemember->Name; ?></td>
													<td><?php echo $valuemember->Telephone; ?></td> 
													<td><?php echo $btn; ?></td> 
													 
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

                     
  
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<!--<h4 class="card-title">ผู้ใช้งานระบบ</h4>
									<p class="card-category">
									แสดงผลข้อมูลบุคคลากร -->
									 <h4 class="card-title">ผู้ปฏิบัติงาน</h4>
									<p class="card-category">
									แสดงผลข้อมูลผู้ปฏิบัติงาน  
									<p align="right" >  <button class="btn btn-warning"  id="btncreatesystem" > เพิ่มรายการผู้ใช้งานระบบ</button>  </p>
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>ชื่อ</th>
													<th>เบอร์โทร</th> 
													<th></th>
												</tr>
											</thead> 
											<tbody id="TableAuthenADetail"> 

											<?php  
												
												foreach($memberwork as $valuememberwork){

													$btn = "ลงทะเบียนแล้ว";
													if($valuememberwork->LineID == ""){

														$btn = '<button  class="btn btn-danger AuthenA" data-MemberID = "'.$valuememberwork->ID.'"> ยืนยันตัวตน  </button>';

													}

													?>
													


												<tr>
												<td><?php echo $valuememberwork->Name; ?></td>
													<td><?php echo $valuememberwork->Telephone; ?></td> 
													<td><?php echo $btn; ?></td>  
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

						




						 
					</div>
			 

				
			<!-- Modal 1-->
			<div class="modal fade" id="Modalone" role="dialog">
				<div class="modal-dialog modal-lg">
				
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header  bg-success ">
					
					<h4 style="color:white"  >สร้างรายการผู้ปฏิบัติงาน</h4>

					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">

					<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">สร้างรายการผู้ปฏิบัติงาน</div>
											</div>
											<div class="card-body">
											<div class="row">
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">ชื่อ</label>
															<input type="email" class="form-control" id="data1" placeholder="กรุณากรอกชื่อ"> 
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">เบอร์โทร</label>
															<input type="email" class="form-control" id="data2" placeholder="กรุณากรอกเบอร์โทร">
														
														</div>
													</div>
													
												</div>
											</div>

										</div>
									</div>
					</div>
					
					</div>
					<div class="modal-footer">
					<button type="button" id="btncreatedataone" class="btn btn-warning"  >สร้าง</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
					</div>
				</div>
				
				</div>
			</div>
			 
			<!-- END  Modal 1 -->



			
			<!-- Modal 2-->
			<div class="modal fade" id="Modaltwo" role="dialog">
				<div class="modal-dialog modal-lg">
				
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header  bg-success ">
					
					<h4 style="color:white"  >สร้างผู้ใช้งานระบบ</h4>

					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">

					<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">สร้างผู้ใช้งานระบบ</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">ชื่อ</label>
															<input type="email" class="form-control" id="data3" placeholder="กรุณากรอกชื่อ"> 
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">เบอร์โทร</label>
															<input type="email" class="form-control" id="data4" placeholder="กรุณากรอกเบอร์โทร">
														
														</div>
													</div>
													
												</div>
												
											</div>

										</div>
									</div>
					</div>
					
					</div>
					<div class="modal-footer">
					<button type="button" id="btncreatedatatwo" class="btn btn-warning"  >สร้าง</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
					</div>
				</div>
				
				</div>
			</div>
			 
			<!-- END  Modal -->
	
				<!-- Modal -->
				<div class="modal fade" id="ModalConfirmA" role="dialog">
					<div class="modal-dialog modal-lg">
					
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header  bg-success ">
						
						<h4 style="color:white"  >ยืนยันตัวตนผู้ใช้งาน</h4>

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
					 
						<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-header">
													<div class="card-title">ยืนยันตัวตนผู้ใช้งาน</div>
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
					
				<!-- Modal -->
				<div class="modal fade" id="ModalConfirmB" role="dialog">
					<div class="modal-dialog modal-lg">
					
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header  bg-success ">
						
						<h4 style="color:white"  >ยืนยันตัวตนผู้ปฏิบัติงาน</h4>

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
					 
						<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-header">
													<div class="card-title">ยืนยันตัวตนผู้ปฏิบัติงาน</div>
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
			<footer class="footer">
				<div class="container-fluid">
					 
					<div class="copyright ml-auto">
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">p.jeerawat</a>
					</div>				
				</div>
			</footer>
		</div>


	<input type="text" id="MemberIDAuthTemp" value="0" readonly hidden >


		<script>
			$(function(){

				setInterval(function(){ 
					
					var MemberAuthId = $("#MemberIDAuthTemp").val();

					if(MemberAuthId != 0){

						$.post("https://environment.webclient.me/index.php/ManageSystem/AuthenCheck",{
							MemberID : MemberAuthId
						},function(data){

							if(data == 0){
								location.reload();
							}
 
						});

					}
				
				}, 2000);


				$("#TableAuthenADetail").on("click",".AuthenA",function(){
					
					var MemberID = $(this).attr("data-MemberID");
					
					$("#ModalConfirmA").find("#QrAuth").attr("src","https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://liff.line.me/1655702904-W07xGjnA?ID="+MemberID);
					
					$("#MemberIDAuthTemp").val(MemberID);

					$("#ModalConfirmA").modal();
 
				});
				$("#TableAuthenBDetail").on("click",".AuthenB",function(){
					
					var MemberID = $(this).attr("data-MemberID");

					$("#ModalConfirmB").find("#QrAuth").attr("src","https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://liff.line.me/1655702904-W07xGjnA?ID="+MemberID);
					$("#MemberIDAuthTemp").val(MemberID);

					$("#ModalConfirmB").modal();
 
				});
				  
			});
		</script>



        <script>
            $(function(){

                $('#basic-datatables').DataTable({ });


            });
			$("#btncreate").click(function(){
				$('#Modalone').modal('show'); 
              });

			  $("#btncreatesystem").click(function(){
				$('#Modaltwo').modal('show'); 
              });
 
			  $("#btncreatedataone").click(function(){
				  var data1 = $("#data1").val();
				  var data2 = $("#data2").val(); 
				  if( data1 == ""){ 
					  swal("กรุณากรอกชื่อ", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});					  
					  $("#data1").focus();
					  return false;
				  }
				  if( data2 == ""){
					swal("กรุณากรอกเบอร์โทร", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
					  $("#data2").focus();
					  return false;
				  }



                 ///// INSERT  DATA ////
				 $.post("https://environment.webclient.me/index.php/ManageSystem/InsertDataMemberManage"
                                  ,
                                   {
									Name :  data1, 
									Telephone    :  data2 
                                     
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
										   //$("#Modalone").modal("hide");
                                      }
                                     });
				  
			     ///// INSERT  DATA //// 

              });
			   
			  $("#btncreatedatatwo").click(function(){
			      var data3 = $("#data3").val();
				  var data4 = $("#data4").val(); 
				  if( data3 == ""){ 
					  swal("กรุณากรอกชื่อ", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
					  $( "#data3" ).focus();
					  return false;
				  }
				  if(data4 == ""){
					swal("กรุณากรอกเบอร์โทร", {
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});			 
					  $("#data4").focus();
					  return false;
				  }
 
                 ///// INSERT  DATA ////
				 $.post("https://environment.webclient.me/index.php/ManageSystem/InsertDataMemberWork"
                                  ,
                                   {
									Name :  data3, 
									Telephone    :  data4 
                                     
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
										   //$("#Modaltwo").modal("hide");
                                      }
                                     });
				  
			     ///// INSERT  DATA //// 
              });	
			  
		 
		 
        </script>

 