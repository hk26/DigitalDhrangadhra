<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="css/house_cleanning.css"></link>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700">
    <link rel="shortcut icon" type="image/jpg" href="..\images\favicon2.png"/>
</head>
<body>
<!--------------------------------------Navigation Header--------------------------------------------------->
  <header>
    <a class="logo" href="#"><img src="..\images\logo.png" class="logoimg" alt="logo"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="..\#search_box">Search</a></li>
            <li><a href="..\#sechead">Sections</a></li>
            <li><a href="..\#dhgmheader">Map</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <a class="cta" href="#">Home</a>
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
  <script type="text/javascript" src="..\js\mobile.js"></script>



<!---------------------------------------Details--------------------------------------------------->
<div class="wrapper-flex">
<?php
    require '..\connection.php';
 
    $query="SELECT * FROM user where services='maid'";
    $query_run =mysqli_query($con, $query);
    $check_user=mysqli_num_rows($query_run)>0;

    if($check_user)
    {
      while($row=mysqli_fetch_array($query_run))
      {
 
        ?>

  <div class="container">
      <div class='banner-img'></div>
      <img src='<?php echo $row['profile_image']; ?>' alt='profile image' class="profile-img">
      <p class="name"><?php echo $row['name'];  ?></p>
      <p class="number">+91 <?php echo $row['phone']; ?></p>
      <p class="exp">Experience: <?php echo $row['experience'];?>  Years</p>
      <p class="description"><?php echo $row['description']; ?></p>
    </div>

<?php 
      }
    }
    else
    {
      echo "No user available";
    }

    ?>
</div>
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
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>