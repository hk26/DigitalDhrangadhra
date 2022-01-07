<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css\login.css">
	  <link rel="shortcut icon" type="image/jpg" href="images\favicon2.png">

</head>
<body>
	<div class= "container">
		<form action="login-user.php" method="POST" autocomplete="">
			<div>
				<h1>Login</h1>
				<?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert_alert-danger_text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
			</div>
			<?php
                    }
                    ?>
			<div class="txt_field">
				<input type="email" style="color: #DCB558" name="email" required value="<?php echo $email ?>">
				<span></span>
				<label>User name</label>
			</div>
			<div class="txt_field">
				<input type="password" style="color: #DCB558" name="password" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="pass">
				Forgot Password?
			</div>
			<div class="login_btn">
				<a href="profile_home.php"><input type="submit" name="login" value="Login"></a>
			</div>
			<div class="signup_link">
				Not a Member?
				<a  href="signup-user.php">Signup</a>
			</div>

		</form>
	</div>
</body>
</html>