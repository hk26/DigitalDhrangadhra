<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services & Stores</title>
	<link rel="stylesheet" type="text/css" href="services.css"></link>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>
  <link rel="shortcut icon" type="image/jpg" href="..\images\favicon2.png"/>
  <!--------------------------------lesscalling----------------------------------------->
  <link rel="stylesheet/less" href="/stylesheets/main.less" type="text/css" />
  <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>

</head>
<body>


	<!--------------------------------------Navigation Header--------------------------------------------------->
  <header>
    <a class="logo" href="#"><img src="..\images\logo.png" class="logoimg" alt="logo"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="#search_box">Search</a></li>
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
			  <div class="search_box" id="search_box">
				<input type="text" class="input" placeholder="search service here...">
				<div class="btn btn_common">
					<i class="fas fa-search"></i>
			    </div>
			  </div>
		   </div>
	    </div>
     </div>


	<!----------------------------------------section cards------------------------------------------------------------>
  <center>
  	<h1 class="sechead" id="sechead">
  		<STRONG> Services & Stores</STRONG>
  	</h1>
  </center>
  <div class="underbar"></div>
  <center>
	<div class="sections">
		<div class="row">
  			<div class="column">
    			<div class="card" name="plumber"  method="POST" onclick="location.href='../register/plumber.php'" >
    			  <img src="image\s1.png" alt="plumber" class="card-img">
                  <pre><b>Plumber</b></pre>
    			</div>
  			</div>
  			<div class="column">
    			<div class="card" name="electrician"  method="POST" onclick="location.href='../register/electrician.php'" >
    			  <img src="image\s2.png" alt="electrician" class="card-img">
                  <pre><b>Electrician</b></pre>
    			</div>
  			</div>
  			<div class="column">
          <div class="card" onclick="location.href='../register/house_cleaning.php'" >
            <img src="image\s3.png" alt="maid" class="card-img">
                  <pre><b>Maid or <br>house cleaning</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='../register/cook.php'" >
            <img src="image\s4.png" alt="cook" class="card-img">
                  <pre><b>Chef or cook</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='../register/carpenter.php'" >
            <img src="image\s5.png" alt="carpanter" class="card-img">
                  <pre><b>Carpanter</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\s6.png" alt="mason" class="card-img">
                  <pre><b>Mason or Constructor</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\s7.png" alt="mechanic" class="card-img">
                  <pre><b>Mechanic</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\ss1.png" alt="grocery" class="card-img">
                  <pre><b>Grocery Store</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\ss2.png" alt="clothes" class="card-img">
                  <pre><b>Garment Shop</shadow></b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\ss3.png" alt="backery" class="card-img">
                  <pre><b>Backery</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\ss4.png" alt="medical" class="card-img">
                  <pre><b>Medical Store</b></pre>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="location.href='Domestic services.html'" >
            <img src="image\ss6.png" alt="Dairy" class="card-img">
                  <pre><b>Dairy</b></pre>
          </div>
        </div>
  		</div>
	</div>
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
