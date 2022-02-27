<?php

session_start ();
include("config.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['uname'];
$b = $_REQUEST['pword'];

$res = mysqli_query($conn,"select name,city from userreg where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);

// if (!$result) {
//     printf("Error: %s\n", mysqli_error($conn));
//     exit();
// }

if($result)
{
	$_SESSION["login"]="1";
    $_SESSION['user']=$a;
    $_SESSION['nc']=$result;
	header("location:home.php");
}
else	
{
	echo "" ?> <h2 style="color: red; font-weight: bold;">Invalid Entries</h2> <?php
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icontop.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <div id="bg"></div>

    <div id="icon">
        <p align="right">Vertex<br>Electronics</p>
    </div>

    <img src="iconmenu.png" alt="icon">

    <div id="login">
        <h1>Login Here</h1>
        <form action="login.php" method="POST"><br>
            <input type="username" name="uname" placeholder="Username" required><br><br>
            <input type="password" name="pword" placeholder="Password" required><br><br>
            <button type="submit" name="sub">Login</button>
        </form><br>
        <a href="reg.php">New here ? Create new Account.</a>
    </div>

    <div id="cr">
        <div>
            <i class="fa fa-fw fa-copyright"></i>
            Made by <b>Akshita Raut</b> as a part of a Minor Project under <a href="https://skillvertex.in/">SkillVertex</a> Internship Program
        </div>
    </div>
</body>
</html>