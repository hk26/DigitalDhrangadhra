<?php

include '..\connection.php';

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$city =$_POST['city'];
$number=$_POST['number'];
$cards=$_POST['cards'];
$file=$_FILES['file'];
$work=$_POST['work'];
$uimage=$_FILES['uimage'];
$description=$_POST['description'];
$gender=$_POST['gender'];




$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];

$uimagefile=$uimage['name'];
$uimagepath=$uimage['tmp_name'];
$uimageerror=$uimage['error'];

//print_r($filename);
//print_r($uimage);
if($fileerror==0 && $uimageerror==0){

	$destfile= 'upload/'.$filename;
	$destfile1= 'uimage/'.$uimagefile;
	//echo "$destfile";
	//echo "$destfile1";
	move_uploaded_file($filepath, $destfile);
	move_uploaded_file($uimagepath, $destfile1);

	$insertquery="INSERT INTO user (name,phone,email,password,city,experience,idproof,idproof_image,services,profile_image, description,gender) values('$fname','$phone','$email','$pwd','$city','$number','$cards','$destfile','$work','$destfile1','$description','$gender')";


	$query=mysqli_query($con,$insertquery);

	if($query){
		header('location:thank you.html');
	}
	else{
				//echo " not inserted";

	}

}
else{
	echo "No register click";
}
}
?>