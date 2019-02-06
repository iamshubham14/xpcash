<!DOCTYPE html>
<html>
<head>

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body style="background:#e9e9e9;">
	<div class="wrapper">
			<div class="" style="padding:5% 20px;">
				<div class="content">
					<div class="container">

						<?php 
						if($pr=='login'){

						?>	

						<div class="row">
							<div class="col-md-4"></div>

							<div class="col-md-4">
								<form method="post" action="<?php echo base_url('user/login') ?>">
								<div class="card">
									<div class="card-header">
										<?php if($msg){echo $msg;} ?>
										<h4 class="card-title">Login</h4>

										
									</div>
										
										
                                    <form action="" method="post">
									<div class="card-body">
										<div class="form-group">
											<div class="form-group">
												<label for="email">Email</label>
												<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password" placeholder="Password" name="password">
											</div>
										</div>
									</div>
									<div class="card-action">
											<button class="btn btn-success btn-sm" name="login">Login</button>
											<button href="" class="btn btn-danger btn-sm" >Register</button>
											<button class="btn btn-default btn-sm">Forgot Password?</button>
											
									</div>

                                  
								</div>

							</div>
							</form> 
						</div>

						<?php
						 } 
						elseif($pr=='register'){
						?>

						<div class="row">
							<div class="col-md-4"></div>
	                       
							<div class="col-md-4">
									<?php if($msg){echo $msg;} ?>
								<form method="post" action="<?php echo base_url('user/register') ?>">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Register</h4>
									</div>
									<div class="card-body">
										<div class="form-group">
											<div class="form-group">
												<label for="email">First Name</label>
												<input type="text" class="form-control" id="firstname" placeholder="First Name" name="fname">
											</div>
											<div class="form-group">
												<label for="password">Last Name</label>
												<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lname">
											</div>
											<div class="form-group">
												<label for="password">Email</label>
												<input type="email" class="form-control" id="lastname" placeholder="Email" name="email">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="lastname" placeholder="Password" name="password">
											</div>
											<div class="form-group">
												<label for="password">Mobile</label>
												<input type="number" class="form-control" id="lastname" placeholder="Mobile" name="mobile">
											</div>
											<div class="form-group">
												<label for="password">City</label>
												<input type="text" class="form-control" id="lastname" placeholder="City" name="city">
											</div>
										</div>
									</div>

                                     <div class="card-action">
										
									<button class="btn btn-success btn-sm" name="submit">Register</button>
									<button class="btn btn-danger btn-sm">Login</button>
											<button class="btn btn-default btn-sm">Forgot Password?</button>
                                     </form>
				     				</div>

									

								</div>
							</form>
							</div>
							<div class="col-md-4"></div>
						</div>


				<?php
						 } 
						elseif($pr=='forget'){
						?>

						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<form method="post" action="<?php echo base_url('user/forget') ?>">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Forget</h4>
									</div>
									<div class="card-body">
										<div class="form-group">
											<div class="form-group">
												<label for="email">Email Address</label>
												<input type="email" class="form-control" id="email" placeholder="Enter Email">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password" placeholder="Password">
											</div>
										</div>
									</div>
									<div class="card-action">
											<button class="btn btn-success btn-sm">Login</button>
											<button class="btn btn-danger btn-sm">Register</button>
											<button class="btn btn-default btn-sm" name="forget">Forgot Password?</button>
										</div>
								</div>
							</form>
							</div>
							<div class="col-md-4"></div>
						</div>


					<?php
				}	
				?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>

</html>