<?php 

		$Dashboard = array("", array("","","","","","","","","","") );
		$ManageStore = array("", array("","","","","","","","","","") ); 
		$ManageSystem = array("", array("","","","","","","","","","") ); 

		switch ($page_focus) {
			case 'Dashboard':
				
				$Dashboard[0] = "active";
				$Dashboard[1][$page_menu] = "active";

				break;
			
			case 'ManageStore':
				
				$ManageStore[0] = "active";
				$ManageStore[1][$page_menu] = "active";

				break;

			case 'ManageSystem':
				
				$ManageSystem[0] = "active";
				$ManageSystem[1][$page_menu] = "active";

				break;
 
		}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Environment Management System</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://iconarchive.com/download/i99875/graphicloads/folded/open-folded.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="https://environment.webclient.me/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['https://environment.webclient.me/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="https://environment.webclient.me/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://environment.webclient.me/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="https://environment.webclient.me/assets/css/demo.css">

		<!--   Core JS Files   -->
	

	<!--<script src="https://environment.webclient.me/assets/js/core/jquery.3.2.1.min.js"></script>-->
	 <script src="https://environment.webclient.me/assets/js/core/jquery.3.5.1.min.js"> </script>




	<script src="https://environment.webclient.me/assets/js/core/popper.min.js"></script>
	<script src="https://environment.webclient.me/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="https://environment.webclient.me/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="https://environment.webclient.me/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="https://environment.webclient.me/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Datatables -->
	<script src="https://environment.webclient.me/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Chart JS -->
	<script src="https://environment.webclient.me/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="https://environment.webclient.me/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="https://environment.webclient.me/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="https://environment.webclient.me/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="https://environment.webclient.me/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="https://environment.webclient.me/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="https://environment.webclient.me/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="https://environment.webclient.me/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="https://environment.webclient.me/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="https://environment.webclient.me/assets/js/setting-demo.js"></script>
	<script src="https://environment.webclient.me/assets/js/demo.js"></script>  


	
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark">
				
				<a href="#" class="logo"> 
                    <h2 style="color: white;" class="navbar-brand">EnvironmentSystem</h2>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					 
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						 
						  
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="https://environment.webclient.me/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									ผู้ดูแลระบบ
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									
									<li>
										<a href="#">
											<span class="link-collapse">แก้ไขข้อมูลส่วนตัว</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">ตั้งค่า</span>
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-success">

						<li class="nav-item <?php echo $Dashboard[0]; ?>">
							<a data-toggle="collapse" href="#Dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-grip-horizontal"></i>
								<p>ผลการดำเนินงาน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="Dashboard">
								<ul class="nav nav-collapse">
									<li class="<?php echo $Dashboard[1][0]; ?>">
										<a href="https://environment.webclient.me/index.php/Dashboard/summary">
											<span class="sub-item">ภาพรวมการปฏิบัติงาน</span>
										</a>
									</li>
									<li hidden class="<?php echo $Dashboard[1][1]; ?>">
										<a href="https://environment.webclient.me/index.php/Dashboard/collection">
											<span class="sub-item">ผลรวมการจัดเก็บขยะ</span>
										</a>
									</li>
                                    <li hidden class="<?php echo $Dashboard[1][2]; ?>">
										<a href="https://environment.webclient.me/index.php/Dashboard/garbage">
											<span class="sub-item">จำนวนถังขยะ</span>
										</a>
									</li>
                                    <li  hidden class="<?php echo $Dashboard[1][3]; ?>">
										<a href="https://environment.webclient.me/index.php/Dashboard/vehicle">
											<span class="sub-item">จำนวนรถเก็บขยะ</span>
										</a>
									</li>
                                    <li class="<?php echo $Dashboard[1][4]; ?>">
										<a href="https://environment.webclient.me/index.php/Dashboard/maintain">
											<span class="sub-item">ผลการส่งซ่อมบำรุง</span>
										</a>
									</li>
                                    
								</ul>
							</div>
						</li>

                        <li class="nav-item <?php echo $ManageStore[0]; ?>">
							<a data-toggle="collapse" href="#ManageStore" class="collapsed" aria-expanded="false">
								<i class="fas fa-hockey-puck"></i>
								<p>บริหารการจัดเก็บ</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="ManageStore">
								<ul class="nav nav-collapse">
                                    <li class="<?php echo $ManageStore[1][0]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageStore/maps">
											<span class="sub-item">แผนผังการจัดเก็บขยะ</span>
										</a>
									</li>
									<li class="<?php echo $ManageStore[1][1]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageStore/detail">
											<span class="sub-item">รายละเอียดการปฏิบัติงาน</span>
										</a>
									</li>
                                    <li class="<?php echo $ManageStore[1][2]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageStore/teams">
											<span class="sub-item">จัดการกลุ่มผู้ปฏิบัติงาน</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

                        <li class="nav-item <?php echo $ManageSystem[0]; ?>">
							<a data-toggle="collapse" href="#ManageSystem" class="collapsed" aria-expanded="false">
								<i class="fas fa-database"></i>
								<p>จัดการข้อมูล</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="ManageSystem">
								<ul class="nav nav-collapse">
                                    <li class="<?php echo $ManageSystem[1][0]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageSystem/employee">
											<span class="sub-item">ผู้ใช้งานระบบ&ผู้ปฏิบัติงาน</span>
										</a>
									</li>
									<li class="<?php echo $ManageSystem[1][1]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageSystem/vehicle">
											<span class="sub-item">ข้อมูลรถเก็บขยะ</span>
										</a>
									</li>
                                    <li class="<?php echo $ManageSystem[1][2]; ?>">
										<a href="https://environment.webclient.me/index.php/ManageSystem/garbage">
											<span class="sub-item">ข้อมูลถังขยะ</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						   
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
