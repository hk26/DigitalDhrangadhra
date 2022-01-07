<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="RegistrationForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/jpg" href="..\images\favicon2.png"/>
     <?php include "upload.php"; ?>
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
          <a href="#">Home</a>
          <a href="#search_box">Search</a>
          <a href="#sechead">Sections</a>
          <a href="#dhgmheader">Map</a>
          <a href="#">About</a>
          <a href="#">Contact us</a>
      </div>
  </div>
  <script type="text/javascript" src="..\js\mobile.js"></script>

<!--------------------------------------main form--------------------------------------------------->
<div class="body1">
  <div class="container">
    <div class="title">Business Registration</div>
    <div class="content">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" placeholder="Enter your Phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" id="city" name="city" value="Dhrangadhra" >
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pwd" placeholder="Enter your password" required>
          </div>

          <div class="input-box">
            <span class="details">Work Type</span>
            <select name="work">
              <option>Select</option>
              <option value="Plumber">Plumber</option>
              <option value="electrician">Electrician</option>
              <option value="maid">Maid or<br> House cleanning</option>
              <option value="chef">Chef or cook</option>
              <option value="carpenter">Carpanter</option>
              <option value="Mason">Mason or Constructor</option>
              <option value="Mechanic">Mechanic</option>
              <option value="Grocery">Grocery Store</option>
              <option value="Garment">Garment Shop</option>
              <option value="Backery">Backery</option>
              <option value="Medical">Medical Store</option>
              <option value="Dairy">Dairy</option>
              <option value="both">Both</option>   
              <option value="other">Other</option>
            </select>
          </div>

          <div class="input-box">
            <span class="details">Experiance</span>
            <select id="number" name="number"><br>
              <option value="choose years">Chose years of Experiance</option>
              <option value="1"><1</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="10+">10+</option>
            </select>
          </div>

        <div class="input-box">
          <span class="details">Id Proof</span>
          <select id="cards" name="cards"><br>
            <option>Select Id</option>
            <option value="uid">Adharcard</option>
            <option value="dl">Driving Lisance</option>
            <option value="voterid">Voter Id Card</option>
            <option value="PAN">PAN Card</option>
          </select>
        </div>


        <div class="input-box">
            <span class="details">Profile Picture</span>
            <!-- actual upload which is hidden -->
            <input type="file" name="uimage" id="actual-btn" hidden/>

            <!-- our custom upload button -->
            <label for="actual-btn" id="imgs">Choose File</label>

            <!-- name of file chosen -->
            <span id="file-chosen">No file chosen</span>
       </div>
       <div class="input-box">
            <span class="details">Id PRoof</span>
            <input type="file" name="file" id="actual-btn1" hidden/>
            <label for="actual-btn1" id="imgs">Choose File</label>
            <span id="file-chosen1">No file chosen</span>
       </div>
       
  </div>
          <div class="input-box" >
            <span class="details">Description</span>
            <textarea rows="5" cols="50" name="description" placeholder="Write something about about you and your business..."></textarea>
          </div>
        

        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
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
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
         const actualBtn = document.getElementById('actual-btn');
        const fileChosen = document.getElementById('file-chosen');
        const actualBtn1 = document.getElementById('actual-btn1');
      const fileChosen1 = document.getElementById('file-chosen1');
         
         actualBtn.addEventListener('change', function(){
         fileChosen.textContent = this.files[0].name
           })
         actualBtn1.addEventListener('change', function(){
         fileChosen1.textContent = this.files[0].name
           })
       </script>

</body>
</html>
