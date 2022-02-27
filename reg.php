<?php

include("config.php"); 

if(isset($_REQUEST['sub']))
{
$u=$_POST['uname'];
$p=$_POST['pword'];
$n=$_POST['name'];
$c=$_POST['city'];

$sql = "INSERT INTO userreg (username, password, name, city)
VALUES ('$u', '$p', '$n', '$c')";

if ($conn->query($sql) === TRUE) {
    header("location:login.php");
} else {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icontop.png" type="image/x-icon">
    <link rel="stylesheet" href="reg.css">
    <title>Register</title>
</head>
<body>
    <div id="bg"></div>

    <div id="icon">
        <p align="right">Vertex<br>Electronics</p>
    </div>

    <img src="iconmenu.png" alt="icon">

    <div id="login">
        <h1>Register here</h1>
        <form action="reg.php" method="POST"><br>
            <input type="text" name="uname" placeholder="Username" required><br><br>
            <input type="password" name="pword" placeholder="Password" required><br><br>
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="text" name="city" placeholder="City" required><br><br>
            <button type="submit" name="sub">Login</button>
        </form><br>
        <a href="login.php">Login Insted</a>
    </div>

    <div id="cr">
        <div>
            <i class="fa fa-fw fa-copyright"></i>
            Made by <b>Akshita Raut</b> as a part of a Minor Project under <a href="https://skillvertex.in/">SkillVertex</a> Internship Program
        </div>
    </div>
</body>
</html>