<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost/Dashboard/assets" target="_blank">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/style.css">
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle img-thumbnail"><span >Admin</span><span><?php echo $this->session->userdata('email'); ?></span> </a>
							<ul class="dropdown-menu dropdown-user">
									<a class="dropdown-item" href="#"><img src="assets/img/mn_pro_ico.png"/> My Profile</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><img src="assets/img/mn_sett_ico.png"/> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><img src="assets/img/mn_log_ico.png"/> Logout</a>
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
						<h4 class="page-title"><span><img src="assets/img/edit_profile.png"/></span> Edit Profile</h4>

						<div class="row">
							<?php 
						if($pr=='edit'){

						?>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"><span><img src="assets/img/edit_profile_ico.png"/></span> Edit Details</h4>
									</div>
									<div class="card-body">
							

										<form method="post" action=""> 
											<?php 
							$id=$this->session->userdata('email');
						    $result['data']=$this->user_model->displayrecordsById($id);
						    // print_r($result['data']);exit();
						     foreach ($result['data'] as $row) 
						     {
                					?>
											<div class="form-group row">
												<div class="col-md-6">
													<label for="email">First Name</label>
													<input type="text" class="form-control" id="email" placeholder="First Name" name="fname" value="<?php echo $row->fname;?>">
												</div>
												<div class="col-md-6">
													<label for="email">Last Name</label>
													<input type="text" class="form-control" id="email" placeholder="Last Name" name="lname" value="<?php echo $row->lname;?>">
												</div>
												</div>
											<div class="form-group row">

												<div class="col-md-6">
													<label for="email">Mobile</label>
													<input type="text" class="form-control" id="email" placeholder="Mobile" name="mobile" value="<?php echo $row->mobile;?>">
												</div>
											</div>
											<div class="form-group row">
									
												<div class="col-md-6">
													<label for="email">City</label>
													<input type="text" class="form-control" id="email" placeholder=" City" name="city" value="<?php echo $row->city;?>">
												</div>
											</div>
											
											<div class="form-group row">
												<div class="col-md-3">
													<input type="Submit" name="update" value="Submit" class="btn btn-warning btn-md btn-block">
													
												</div>
											</div>
										</form>
										<?php
                }
           ?>
                
									</div>
								</div>
							</div>
						</div>
						
						

						<div class="row">
							<?php
						 } 
						elseif($pr=='change_pass'){
						?>
					
							<div class="col-md-12">
								
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"><span><img src="assets/img/cng_psw_ico.png"/></span> Change Password</h4>
									</div>

									<div class="card-body">
										<form method="post" action="">
											<div class="form-group row">
												<div class="col-md-4">
													<label for="email">Enter Old Password</label>
													<input type="password" class="form-control" id="email" name="old_pass" placeholder="">
												</div>
												<div class="col-md-4">
													<label for="email">Enter New Password</label>
													<input type="password" class="form-control" id="email" placeholder="" name="new_pass">
												</div>
												<div class="col-md-4">
													<label for="email">Conform Password</label>
													<input type="password" class="form-control" id="email" placeholder="" name="confirm_pass">
												</div>
											</div>
											
											<div class="form-group row">
												<div class="col-md-3">
													<button class="btn btn-warning btn-md btn-block" name="change_pass">Submit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<?php
					}	
					?>
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
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/dash.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>