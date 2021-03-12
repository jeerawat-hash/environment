 
		<div class="main-panel">
			<div class="content"> 
				<div class="page-inner">
                <div class="page-header">
						<h4 class="page-title"><?php echo $page_name; ?></h4> 
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
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">สถิติการปฏิบัติงานรวม</div> 
									</div>
								</div>
								<div class="card-body">
								
										  
                                    <div class="card">
                                        <div class="card-body pb-0">
                                            <div class="h1 fw-bold float-right text-warning">+7%</div>
                                            <h2 class="mb-2">213</h2>
                                            <p class="text-muted">รายการ</p>
                                            <div class="pull-in sparkline-fix">
                                                <div id="lineChart"></div>
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
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">p.jeerawat</a>
					</div>				
				</div>
			</footer>
		</div>
		 
 <script type="text/javascript">
 	$(function(){

 						swal({
								title: "อยู่ระหว่างการปรับปรุง",
								text: " ",
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