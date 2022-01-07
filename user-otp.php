<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<!-- saved from url=(0060)file:///C:/Users/Harsh%20Kanazariya/Downloads/Otp%20(2).html -->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css\otp.css">
    <link rel="shortcut icon" type="image/jpg" href="images\favicon2.png">

</head>
<body>
	<div class="container">
		<form  action="user-otp.php" method="POST" autocomplete="off">
			<div>
				<h1>Enter OTP</h1>
				<?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert_alert-success_text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
			</div>
			<div class="txt_field">
				<input type="number" style="color: #DCB558" name="otp" required="">
				<span></span>
				<label>Enter OTP here</label>
			</div>
			<div class="login_btn">
				<a href="login-user.php"><input type="submit"  name="check" value="Confirm OTP">
			</div>
		</form>
	</div>

</body></html>