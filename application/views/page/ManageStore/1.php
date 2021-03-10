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
									<h4 class="card-title">รายละเอียดการจัดเก็บขณะนี้</h4>
									<p class="card-category">
									แสดงข้อมูลกลุ่มที่จัดเก็บขยะจำนวนและน้ำหนักรวมในวันนี้
									 <p align="right" >  <button class="btn btn-warning"  id="btncreate" > สร้างรายการการจัดเก็บ</button>  </p>  </p>
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
				</div>
			</div>

	
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header  bg-success ">
          
          <h4 style="color:white"  >รายละเอียดการจัดเก็บ</h4>

		  <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

		<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">สร้างรายละเอียดการจัดเก็บ</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">รหัสพนักงาน</label>
												<input type="email" class="form-control" id="email2" placeholder="รหัสพนักงาน"> 
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">ชื่อพนักงาน</label>
												<input type="email" class="form-control" id="email2" placeholder="ชื่อพนักงาน">
											 
											</div>
										</div>
										 
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">แผนก</label>
												<input type="email" class="form-control" id="email2" placeholder="แผนก">
												 
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="smallSelect">ประเภทการจัดเก็บ</label>
											  
												<select class="form-control form-control-sm" id="smallSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
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

 