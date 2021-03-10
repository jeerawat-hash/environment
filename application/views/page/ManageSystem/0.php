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
									<h4 class="card-title">ผู้ปฏิบัติงาน</h4>
									<p class="card-category">
									แสดงผลข้อมูลผู้ปฏิบัติงาน 
									<p align="right" >  <button class="btn btn-warning"  id="btncreate" > เพิ่มรายการการผู้ปฏิบัติงาน</button>  </p>
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead> 
											<tbody> 
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

                     
  
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">ผู้ใช้งานระบบ</h4>
									<p class="card-category">
									แสดงผลข้อมูลบุคคลากร
									<p align="right" >  <button class="btn btn-warning"  id="btncreatesystem" > เพิ่มรายการผู้ใช้งานระบบ</button>  </p>
								</p>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead> 
											<tbody> 
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
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
															<input type="email" class="form-control" id="email2" placeholder="กรุณากรอกชื่อ"> 
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">เบอร์โทร</label>
															<input type="email" class="form-control" id="email2" placeholder="กรุณากรอกเบอร์โทร">
														
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
															<input type="email" class="form-control" id="email2" placeholder="กรุณากรอกชื่อ"> 
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="email2">เบอร์โทร</label>
															<input type="email" class="form-control" id="email2" placeholder="กรุณากรอกเบอร์โทร">
														
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
				$('#Modalone').modal('show'); 
              });

			  $("#btncreatesystem").click(function(){
				$('#Modaltwo').modal('show'); 
              });
 
			  $("#btncreatedataone").click(function(){
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
			   
			  $("#btncreatedatatwo").click(function(){
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
        </script>

 