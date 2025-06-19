<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephyr | Authentication</title>
	<link rel="icon" href="../img/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/login/style.css">
	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<?php
		session_start();
		if($_SESSION['logged-in'] == "y") {
			header("Location: ../user/");
		}
	?>
</head>
<body>
<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
                        <br><h1>Create Account</h1>
						<div id="alert-box-signup"></div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input id="username-up" type="text" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input id="email-up" type="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password-up" type="password" placeholder="Password">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password-repeat-up" type="password" placeholder="Confirm password">
						</div>
                        <div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<select id="type-up" name="type">
                                <option value="user">User</option>
                                <option 
								<?php 
									if ($_GET['authentication'] == "sign-up" AND $_GET['type'] == "admin") {
										echo "selected";
									}
								?> 
								value="admin">Admin</option>
                            </select>
						</div>
						<button onclick="signUp()">
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
                        <br><h1>Sign in</h1>
						<div id="alert-box-signin"></div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input id="email-in" type="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password-in" type="password" placeholder="Password">
						</div>
						<button onclick="signIn()">
							Sign in
						</button>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
    <script src="../js/login/script.js"></script>
	<?php
		$authentication = $_GET['authentication'];
		if ($authentication != "sign-in" AND $authentication != "sign-up") {
			$authentication = "sign-in";
		}
		echo "
			<script>
				setTimeout(() => {
					container.classList.add('$authentication')
				}, 200)
			</script>
		";
	?>
</body>
</html>