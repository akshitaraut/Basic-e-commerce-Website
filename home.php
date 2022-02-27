<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icontop.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <div id="mainmenu">
        <div id="menu">
            <a href="home.php" id="cur">Home &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="new.php">New Releases &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <!-- <a href="login.php" id="loginbutton">Login &nbsp;&nbsp;&nbsp;&nbsp;</a> -->
            <a href="acc.php" id="cart"><i class="fa fa-fw fa-user-circle"></i></a>
        </div>
        <div id="icon">
            <img src="iconmenu.png" alt="icon">
            <h1>VertexElectronics</h1>
        </div>
    </div>

    <div id="contact">
        &nbsp;<i class="fa fa-fw fa-linkedin"></i> : &nbsp; <a href="https://www.linkedin.com/in/akshita-raut/">Akshita Raut &nbsp;&nbsp;</a>
    </div>

    <div id="options">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div id="a" class="op">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="laptop.php" id="cart"><i class="fa fa-fw fa-laptop"></i></a>
            <p>Laptops</p>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div id="b" class="op">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mobile.php" id="cart"><i class="fa fa-fw fa-mobile"></i></a>
            <p>Mobiles</p>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div id="c" class="op">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="music.php" id="cart"><i class="fa fa-fw fa-music"></i></a>
            <p>Music</p>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div id="d" class="op">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="homeprod.php" id="cart"><i class="fa fa-fw fa-plug"></i></a>
            <p>Home</p>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div id="bs">
        <div id="t">
            <p>Our Best Sellers</p>
        </div>

        <div class="w3-content w3-display-container" id="slide">

            <div class="w3-display-container mySlides">
              <img src="s3.jpg" style="width:100%">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                Boat Rockerz 400
              </div>
            </div>
            
            <div class="w3-display-container mySlides">
              <img src="s2.jpg" style="width:100%">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                HP Pavilion x360
              </div>
            </div>
            
            <div class="w3-display-container mySlides">
              <img src="s1.jpg" style="width:100%">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
              iPhone X
              </div>
            </div>
            
            <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
            
            </div>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);
                
                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }
                
                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  if (n > x.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
                </script>

    </div>

    <div id="cr">
        <div>
            <i class="fa fa-fw fa-copyright"></i>
            Made by <b>Akshita Raut</b> as a part of a Minor Project under <a href="https://skillvertex.in/">SkillVertex</a> Internship Program
        </div>
    </div>
    
</body>
</html>