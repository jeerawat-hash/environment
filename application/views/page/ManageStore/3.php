 

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




        
			
        </script>