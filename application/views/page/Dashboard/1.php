 
		<div class="main-panel">
			<div class="content"> 
				<div class="page-inner">
                <div class="page-header">
						<h4 class="page-title"><?php echo $page_name; ?></h4> 
					</div>



					<div class="row">
						<div class="col-md-4">
							<div class="card card-dark bg-primary-gradient">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right">+5%</div>
									<h2 class="mb-2">17</h2>
									<p>-</p>
									<div class="pull-in sparkline-fix chart-as-background">
										<div ><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-dark bg-secondary-gradient">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right">-3%</div>
									<h2 class="mb-2">27</h2>
									<p>-</p>
									<div class="pull-in sparkline-fix chart-as-background">
										<div ><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-dark bg-success2">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right">+7%</div>
									<h2 class="mb-2">213</h2>
									<p>-</p>
									<div class="pull-in sparkline-fix chart-as-background">
										<div ><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">สถิติ</div>
									<div class="card-category">แสดงข้อมูลสรุปผล</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">-</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">-</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">-</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">สถิติการจัดเก็บประจำสัปดาห์</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">จัดเก็บ</h6>
												<h3 class="fw-bold">00 กก.</h3>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-danger op-8">ทำลาย</h6>
												<h3 class="fw-bold">00 กก.</h3>
											</div>
										</div>
										<div class="col-md-8">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
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
		 
  <script type="text/javascript">
 	$(function(){

 						swal({
								title: "<?php echo $page_name; ?>",
								text: "อยู่ระหว่างการปรับปรุง",
								icon: "info",
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