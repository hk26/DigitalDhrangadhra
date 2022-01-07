<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Dhrangadhra</title>
  <link rel="stylesheet" type="text/css" href="css\Homepage2.css"></link>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>
  <link rel="shortcut icon" type="image/jpg" href="images\favicon2.png"/>
  <!--------------------------------lesscalling----------------------------------------->
  <!--<link rel="stylesheet/less" href="/stylesheets/main.less" type="text/css" />
  <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>
   -->

</head>
<body>


  <!--------------------------------------Navigation Header--------------------------------------------------->
  <header>
    <a class="logo" href="#"><img src="images\logo.png" class="logoimg" alt="logo"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="#search_box">Search</a></li>
            <li><a href="#sechead">Sections</a></li>
            <li><a href="#dhgmheader">Map</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <a class="cta" href="#">Contact</a>
    <p class="menu cta">Menu</p>
  </header>
  <div id="mobile__menu" class="overlay">
      <a class="close">&times;</a>
      <div class="overlay__content">
          <a href="#search_box">Search</a>
          <a href="#sechead">Sections</a>
          <a href="#dhgmheader">Map</a>
          <a href="#">About</a>
          <a href="#">Contact us</a>
      </div>
  </div>
  <script type="text/javascript" src="js\mobile.js"></script>
      

  <!---------------------------------------sliding images------------------------------------------------------->
  <div class="greetings">
    <div class="w3-content w3-section" style=" width:100%; height: inherit;">
        <img class="mySlides" src="images\img_1.png" style="width:inherit; height: inherit;">
        <img class="mySlides" src="images\img_2.png" style="width:inherit; height: inherit;">
        <img class="mySlides" src="images\img_3.png" style="width:inherit; height: inherit;">
    </div>
    
  </div>


  <!---------------------------------------------search bar---------------------------------------------------------->
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
     <div class="wrapper">
      <div class="container">
       <div class="search_wrap search_wrap_3">
        <div class="search_box" id="search_box">
        <input type="text" class="input" placeholder="search sections here...">
        <div class="btn btn_common">
          <i class="fas fa-search"></i>
          </div>
        </div>
       </div>
      </div>
     </div>


  <!----------------------------------------section cards------------------------------------------------------------>
  <center><h1 class="sechead" id="sechead"><STRONG> Sections</STRONG></h1></center>
  <div class="underbar"></div>
  <center>
  <div class="sections">
    <div class="row">
        <div class="column">
          <div class="card" onclick="location.href='services/services.php'" >
            <img src="images\repair-tools.png" alt="services" class="card-img">
            <pre><b>Domestic services</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='application/applications.php'">
            <img src="images\application.png" alt="application forms" class="card-img">
            <pre><b>Applications</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='studentcorner/students.html'">
            <img src="images\students.png" alt="student" class="card-img">
            <pre><b>Student corner</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='schedule/schedules.html'">
            <img src="images\schedule.png" alt="Schedules" class="card-img">
            <pre><b>Schedules</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="window.open('https://www.indianculture.gov.in/flipbook/11197', '_blank')">
            <img src="images\history.png" alt="history" class="card-img">
            <p>
              <b>DHG Empire History</b>
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='register/RegistrationForm.php'">
            <img src="images\ads.png" alt="advertisement" class="card-img">
            <p><b>Business & ADS Registration</b></p>
          </div>
        </div>
      </div>
  </div>

<!-------------------------------------------Dhg Map-------------------------------------->
  <center><h1 class="sechead" id="dhgmheader"><STRONG> Dhrangadhra Map</STRONG></h1></center>
  <div id="mapbox">
  <img src="images\dhgmap.png" id="dhgmap" onclick="window.open('https://www.google.com/maps/@22.986421,71.4806089,13.82z', '_blank')"></div>

</center>


<!-------------------------------footer--------------------------------------------------->
<footer class="footer">
     <div class="containerf">
      <div class="row">
        <div class="footer-col">
          <h4>Pages</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">complaints</a></li>
            <li><a href="#">suggestions</a></li>
            <li><a href="#">tech support</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Sections</h4>
          <ul>
            <li><a href="#">domestic services</a></li>
            <li><a href="#">application forms</a></li>
            <li><a href="#">student corner</a></li>
            <li><a href="#">rail & bus schedule</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/ILoveDhg/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/mamlatdardhg?lang=en"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/digitaldhrangadhra/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.google.com/maps/@22.986421,71.4806089,13.82z"><i class="fa fa-compass"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

  <script>
      
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
      myIndex++;
        if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 2000); // Change image every 2 seconds
      }
  </script>

</body>
</html>
