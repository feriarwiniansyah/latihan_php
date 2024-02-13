<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

		<style>
				body {
					background-image: url(imgbag.jpg);
					background-repeat: no-repeat;
					background-size: 100%;
					
				}

				body ::before {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					bottom: 0;
					right: 0;
					background: rgba(219, 207, 207, 0);
					backdrop-filter: blur(2px);
					z-index: -1;
				}
		</style>
	</head>

	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

  
				<!-- row -->
				<div class="row row-sm m-2 mt-3">
					<div class="col-lg-4">
						<div class="card mg-b-20 bg-primary-transparent">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user" style="margin-left: 35%;">
											<img alt="" src="myfoto.jpg">
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div style="margin-left: 35%;">
												<h5 class="main-profile-name">FERI AS</h5>
												<p class="main-profile-name-text">XI RPL</p>
											</div>
										</div>
										<h6 class="text-black">Bio</h6>
										<div class="main-profile-bio text-black">
											<p>tugas php dasar dengan menggunakan gabungan template Azira</p>
										</div><!-- main-profile-bio -->
										<hr>
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo bg-danger-transparent text-black">
													<i class="icon ion-logo-buffer"></i>
												</div>
												<div class="media-body text-black">
													<h6>Sekolah di SMKN 2 SUBANG</h6>
													<p>dengan jurusan rekayasa perangkat lunak</p>
												</div>
											</div>
										</div><!-- main-profile-work-list -->
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Sosial</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-danger-transparent text-black">
													<i class="icon ion-logo-github">></i>
												</div>
												<div class="media-body text-black">
													<span>Github</span><a href="#" class="text-black">github.com/spruko</a>
												</div>
												<div class="media-icon bg-danger-transparent text-black">
													<i class="icon ion-logo-github">></i>
												</div>
												<div class="media-body text-black">
													<span>instagram</span> <a href="#" class="text-black">arfer17</a>
												</div>
											</div>
											<div class="media">
											</div>
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="main-content-body main-content-body-profile">
							<div class="">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading bg-primary-transparent">
										<div class="tabs-menu1 ">
											<ul class="nav">
												<li><a href="#tab-61" data-bs-toggle="tab" class="add-to-cart btn btn-default text-black"><h5>MATERI</h5></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-content">
								<div id="tab-61">
									<ul class="widget-users row ps-0 mb-5">
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0 bg-primary-transparent">
													<div class="card-body text-center text-black">
														<h1>MATERI</h1>
														<hr>
														<h1>Kondisi</h1>
													</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0  bg-primary-transparent">
													<div class="card-body text-left text-black">
													<p>Kondisi diperlukan untuk memeriksa suatu nilai untuk melakukan suatu aksi</p>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0 bg-primary-transparent">
													<div class="card-body text-left text-black">
														<h5>CONTOH Kondisi</h5>
														<hr>
														<!-- syntax php -->
															<?php
																$t = date("H");

																if ($t < "20") {
																  echo "Have a good day!";
																} else {
																  echo "Have a good night!";
																}
															?>
														<!-- akhir syntax php -->

													</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="page-signin-style">
						<li class="">
							<h1 class="animated ">belajar php</h1>
							<p class="animated ">Feri Arwiniansyah</p>
							<p class="animated "> XI RPL</p>
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
					<span> Copyright © 2022 <a   href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>



		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>