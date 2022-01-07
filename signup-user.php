<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css\signup.css">
	  <link rel="shortcut icon" type="image/jpg" href="images\favicon2.png">

</head>
<body>
		<div class= "container">
		<form action="signup-user.php" method="POST" autocomplete="">
			<div>
				<h1>Sign Up</h1>
				<?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert_alert_danger_text_center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
			</div>
			 <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert_alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
			<div class="txt_field" id="fname">
				<input  type="text" style="color: #DCB558" name="name" required value="<?php echo $name ?>">
				<span></span>
				<label>Full Name</label>
			</div>
			<div class="txt_field">
				<input style="color: #DCB558" type="text" name="email" required value="<?php echo $email ?>">
				<span></span>
				<label>Email address</label>
			</div>
			<div class="txt_field">
				<input style="color: #DCB558" type="password" name="password" required >
				<span></span>
				<label>Password</label>
			</div>
			<div class="txt_field">
				<input style="color: #DCB558" type="password" name="cpassword" required>
				<span></span>
				<label> Confirm Password</label>
			</div>
			
			<div class="signup_btn">
				<input type="submit" name="signup" value="Signup" >
			</div>

		<div class="link_login-link_text-center">Already a member? <a style="color: #DCB558;" href="login-user.php">Login here</a></div>
			<div class="google">
				
			</div>
		</form>
	</div>
</body>
</body>
</html>