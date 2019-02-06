<!DOCTYPE html>
<html>
<head>
	  	<base href="http://localhost/Dashboard/assets">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					LOGO HERE
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo base_url('assets/img/profile.jpg')?>" alt="user-img" width="36" class="img-circle img-thumbnail"><span >Admin</span><span><?php echo $this->session->userdata('email'); ?></span> </a>
							<ul class="dropdown-menu dropdown-user">
									<a class="dropdown-item" href="#"><img src="assets/img/mn_pro_ico.png"/> My Profile</a>   
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><img src="assets/img/mn_sett_ico.png"/> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url('user/logout');?>" ><img src="assets/img/mn_log_ico.png"/> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<?php include('sidebar.php');?>

			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title"><span><img src="assets/img/dashboard.png"/></span> Dashboard</h4>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<img src="assets/img/balance_tokens.png" class="img-fluid mx-auto d-block"/>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">BALANCE</p>
													<h4 class="card-title">B 7.05</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<img src="assets/img/available_tokens.png" class="img-fluid mx-auto d-block"/>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">AVAILBALE TOKEN</p>
													<h4 class="card-title">0.00</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<img src="assets/img/team_members.png" class="img-fluid mx-auto d-block"/>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">TEAM MEMBERS</p>
													<h4 class="card-title">1303</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<img src="assets/img/free_tokens.png" class="img-fluid mx-auto d-block"/>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">FREE TOKEN</p>
													<h4 class="card-title">0.00</h4>
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
										<h4 class="card-title"><span><img src="assets/img/reff_link_ico.png"/></span> Referral Link</h4>
									</div>
									<div class="card-body">
										<div class="form-group row">
											<div class="col-md-10">
												<input type="email" class="form-control" id="email" placeholder="https://www.apollogold.io/ref/fgcv">
											</div>
											<div class="col-md-2">
												<button class="btn btn-warning btn-md btn-block">COPY</button>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="text-center"><img src="assets/img/social_btn.jpg"/></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"><span><img src="assets/img/sales_ico.png"/></span> 2018 Sales</h4>
										<p class="card-category">
										Number of products sold</p>
									</div>
									<div class="card-body">
										<div id="salesChart" class="chart"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="card" style="min-height:210px;">
									<div class="card-header">
										<h4 class="card-title"><span><img src="assets/img/buy_token_ico.png"/></span> Buy Tokens Now</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-stats">
													<div class="card-body ">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center icon-warning">
																	<img src="assets/img/bitcoin_ico.png" class="img-fluid mx-auto d-block"/>
																</div>
															</div>
															<div class="col-7 d-flex align-items-center">
																<div class="numbers">
																	<p class="card-category">Bitcoin</p>
																	<h4 class="card-title">23 TOKEN</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-stats">
													<div class="card-body ">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<img src="assets/img/ethercoin_ico.png" class="img-fluid mx-auto d-block"/>
																</div>
															</div>
															<div class="col-7 d-flex align-items-center">
																<div class="numbers">
																	<p class="card-category">Ethereum Coin</p>
																	<h4 class="card-title">23 TOKEN</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-stats">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<img src="assets/img/litecoin_ico.png" class="img-fluid mx-auto d-block"/>
																</div>
															</div>
															<div class="col-7 d-flex align-items-center">
																<div class="numbers">
																	<p class="card-category">Litecoin</p>
																	<h4 class="card-title">23 TOKEN</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card" style="min-height:210px;">
									<div class="card-header ">
										<h4 class="card-title"><span><img src="assets/img/new_ico.png"/></span> News Update</h4>
									</div>
									<div class="card-body">
									
									</div>
									<div class="card-footer ">
										<div class="stats">
											<i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"><span><img src="assets/img/downline_ico.png"/></span> Latest 10 Direct Downline</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th scope="col">#Id </th>
														<th scope="col">Firstname</th>
														<th scope="col">Lastname</th>
														<th scope="col">Email</th>
														<th scope="col">Date</th>
														<th scope="col" style="text-align:right">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>cointestwe</td>
														<td>cointest</td>
														<td>admin@cointest.com</td>
														<td>06/09/18 10:09 AM</td>
														<td style="text-align:right"><button class="btn btn-warning btn-md">View Referrals</button></td>
													</tr>
													<tr>
														<td>2</td>
														<td>cointestwe</td>
														<td>cointest</td>
														<td>admin@cointest.com</td>
														<td>06/09/18 10:09 AM</td>
														<td style="text-align:right"><button class="btn btn-warning btn-md">View Referrals</button></td>
													</tr>
													<tr>
														<td>3</td>
														<td>cointestwe</td>
														<td>cointest</td>
														<td>admin@cointest.com</td>
														<td>06/09/18 10:09 AM</td>
														<td style="text-align:right"><button class="btn btn-warning btn-md">View Referrals</button></td>
													</tr>
													<tr>
														<td>4</td>
														<td>cointestwe</td>
														<td>cointest</td>
														<td>admin@cointest.com</td>
														<td>06/09/18 10:09 AM</td>
														<td style="text-align:right"><button class="btn btn-warning btn-md">View Referrals</button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header ">
										<h4 class="card-title"><span><img src="assets/img/user_detl_ico.png"/></span> User Account Information</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><b>Id</b></td>
														<td style="text-align:right"><?php echo $this->session->userdata('id'); ?></td>
													</tr>
													<tr>
														<td><b>Name</b></td>
														<td style="text-align:right">Admin</td>
													</tr>
													<tr>
														<td><b>Email ID</b></td>
														<td style="text-align:right"><?php echo $this->session->userdata('email'); ?></td>
													</tr>
													<tr>
														<td><b>Join Date</b></td>
														<td style="text-align:right">01/01/1970</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header ">
										<h4 class="card-title"><span><img src="assets/img/spon_detl_ico.png"/></span> Sponsor Details</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><b>Username</b></td>
														<td style="text-align:right">Admin</td>
													</tr>
													<tr>
														<td><b>Name</b></td>
														<td style="text-align:right">Admin</td>
													</tr>
													<tr>
														<td><b>Email ID</b></td>
														<td style="text-align:right">vkeyphad@gmail.com</td>
													</tr>
													<tr>
														<td><b>Join Date</b></td>
														<td style="text-align:right">01/01/1970</td>
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
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="">
										Terms And Conditions
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="">
										Privacy Policy
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							All Rights Reserved Copyrights 2018.
						</div>				
					</div>
				</footer>
			</div>
		</div>
	</div>

</body>
<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/core/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/chartist/chartist.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jquery-mapael/jquery.mapael.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jquery-mapael/maps/world_countries.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/chart-circle/circles.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/dash.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/demo.js')?>"></script>
</html>