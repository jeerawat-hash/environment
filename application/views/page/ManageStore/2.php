<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
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
									<h4 class="card-title">กลุ่มผู้ปฏิบัติงานขณะนี้</h4>
									<p class="card-category">
									  
								    	<button class="btn btn-warning"  id="btncreate" > Creates</button>      
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
				</div>
			</div>


			
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
 
        </script>