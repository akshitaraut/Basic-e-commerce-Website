<?php 
session_start ();
include("config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php");

$u=$_SESSION['user'];
$nc=$_SESSION['nc'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icontop.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="acc.css">
    <title>Account</title>
</head>
<body>
    <div id="mainmenu">
        <div id="menu">
            <a href="home.php">Home &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="new.php">New Releases &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <!-- <a href="login.php" id="loginbutton">Login &nbsp;&nbsp;&nbsp;&nbsp;</a> -->
            <a href="acc.php" id="cart" style="color: rgb(105, 164, 252);"><i class="fa fa-fw fa-user-circle"></i></a>
        </div>
        <div id="icon">
            <img src="iconmenu.png" alt="icon">
            <h1>VertexElectronics</h1>
        </div>
    </div>

    <div id="contact">
        &nbsp;<i class="fa fa-fw fa-linkedin"></i> : &nbsp; <a href="https://www.linkedin.com/in/akshita-raut/">Akshita Raut &nbsp;&nbsp;</a>
    </div>

    <div id="bg">
        <i class="fa fa-fw fa-user-circle"></i>
        <p><?php echo $nc[0];?></p>
        <h3><?php echo $nc[1];?></h3>
        <form action="acc.php" method="GET">
        <button type="submit" name="logout">Logout</button>
        </form>
        <?php
        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION["login"]);
            unset($_SESSION['user']);
            unset($_SESSION['nc']);
            header('location:login.php');
        }
        ?>
    </div>

    <div id="cr">
        <div>
            <i class="fa fa-fw fa-copyright"></i>
            Made by <b>Akshita Raut</b> as a part of a Minor Project under <a href="https://skillvertex.in/">SkillVertex</a> Internship Program
        </div>
    </div>
</body>
</html>