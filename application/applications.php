<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Digital Dhrangadhra</title>
	<link rel="stylesheet" type="text/css" href="application.css"></link>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>
  <link rel="shortcut icon" type="image/jpg" href="..\images\favicon2.png"/>
  <!--------------------------------lesscalling----------------------------------------->
  <!--<link rel="stylesheet/less" href="/stylesheets/main.less" type="text/css" />
  <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>
   -->

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
    <a class="cta" href="..\profile_home.php">Home</a>
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
 	<!---------------------------------------------search bar---------------------------------------------------------->
 	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
     <div class="wrapper">
	    <div class="container">
		   <div class="search_wrap search_wrap_3">
			  <div class="search_box">
				<input type="text" class="input" placeholder="search application pdfs here...">
				<div class="btn btn_common">
					<i class="fas fa-search"></i>
			    </div>
			  </div>
		   </div>
	    </div>
     </div>



<center>
    <table class="styled-table">
		<thead>
		    <th>ID</th>
		    <th>Filename</th>
		    <th>size</th>
		    <th>Downloads</th>
		    <th>Action</th>
		</thead>
		<tbody>
		  <?php
		   $count = 0;
		   foreach ($files as $file): 
				if ($count%2 == 0 ) { ?>
				  <tr class="active-row">
				      <td><?php echo $file['id']; ?></td>
				      <td><?php echo $file['name']; ?></td>
				      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
				      <td><?php echo $file['downloads']; ?></td>
				      <td><a href="applications.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
		     	  </tr>
				<?php } 
				else{ ?>
					  <tr>
					      <td><?php echo $file['id']; ?></td>
					      <td><?php echo $file['name']; ?></td>
					      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
					      <td><?php echo $file['downloads']; ?></td>
					      <td><a href="applications.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
					  </tr>
				<?php }
				$count++; ?>
				
		  <?php endforeach;?>
		</tbody>
	</table>	
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
            <a href="https://www.instagram.com/ilovedhrangadhra/?hl=en"><i class="fab fa-instagram"></i></a>
            <a href="https://www.google.com/maps/@22.986421,71.4806089,13.82z"><i class="fa fa-compass"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>



 </body>
</html>