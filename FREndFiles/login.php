<?php 
	require 'html-builder.php';
?>

<!DOCTYPE html>

<html>

	<head>
		
		 <!-- PHP Header call [Title, Charset, and Icon Link] -->
        <?php insertHeader("Login"); ?>
        
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="google-signin-client_id" content="783497289681-md44u43oh563o2jrf0gjsfbtgr6oh2qg.apps.googleusercontent.com">
	    
	    <!-- Custom CSS -->
	    <link href="dashboard.css" rel="stylesheet" type="text/css">
	    
	    <!-- Bootstrap and font awesome-->
	    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
	    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="/FREndFiles/js/login.js"></script>
	</head>

	<body>
	
		<!-- BEGIN NAVBAR -->
	            
        <?php insertNav(); ?>
            
        <!-- END NAVBAR -->
        
        
        <!-- BEGIN MAIN -->
        
		<div class="container">
			<div class="omb_login">
				<h2 class="omb_authTitle" id="status">Login / <a href="#signup" onclick="signupValidate(this)">Sign up</a></h2>

				<div class="row omb_row-sm-offset-3 omb_socialButtons">
					<!--remove this for previous look. this is added from FB website -->
					<div class="col-xs-4 col-sm-3">
						<div class="fb-login-button" data-max-rows="1" onlogin="checkLoginState();" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
						<!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>-->
					</div>
					<div class="col-xs-4 col-sm-4">
						<div class="g-signin2" data-onsuccess="onSignIn" data-width="200px" data-height="40px" data-longtitle="true"></div>
					</div>
				</div>

				<div class="row omb_row-sm-offset-3 omb_loginOr">
					<div class="col-xs-12 col-sm-6">
						<hr class="omb_hrOr">
						<span class="omb_spanOr">or</span>
					</div>
				</div>

				<div class="row omb_row-sm-offset-3">
					<div class="col-xs-12 col-sm-6">
						<form class="omb_loginForm" action="" autocomplete="off" method="POST">
							
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user">
									</i>
								</span>
								<input type="text" class="form-control" name="username" id="username" placeholder="username">
							</div>

							<span class="help-block" id="usernameError">Username error</span>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i>
								</span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							</div>
							
							<span class="help-block" id="passwordError">Password error</span>
							
							<div class="input-group" style="display:none;" id="passwordDiv">
								<span class="input-group-addon"><i class="fa fa-lock"></i>
								</span>
								<input type="password" class="form-control" name="passwordReenter" id="passwordReenter" placeholder="Re-enter Password">
							</div>
							
							<span class="help-block" id="passwordReenterError">Password Doesn't Match</span>
							
							<div class="input-group" style="display:none;" id="emailDiv">
								<span class="input-group-addon"><i class="fa fa-envelope"></i>
								</span>
								<input type="text" class="form-control" name="email" id="email" placeholder="email@example.com">
							</div>
							
							<span class="help-block" id="emailError">Email error</span>

							<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="login(this)">Login</button>
						</form>
					</div>
				</div>
				<div class="row omb_row-sm-offset-3">
					<div class="col-xs-12 col-sm-3">
						<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<p class="omb_forgotPwd">
							<a href="#" id="forgotPass">Forgot password?</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- END MAIN -->
		
		
		<!--- Facebook and Google Login Scripts-->
		<script src="./js/login.js"></script>
	</body>

</html>