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
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icontop.png" type="image/x-icon">
    <title>New Releases</title>
</head>
<body>

    <div id="mainmenu">
        <div id="menu">
            <a href="home.php">Home &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="new.php" id="cur">New Releases &nbsp;&nbsp;&nbsp;&nbsp;</a>
            <!-- <a href="#" id="loginbutton">Login &nbsp;&nbsp;&nbsp;&nbsp;</a> -->
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

    <div id="list" style="overflow: auto;">

        <?php
        $conn=mysqli_connect("localhost", "root", "", "vertex");
        if($conn -> connect_error){
            die("Connection Failed".$conn->connection_error);
        }

        $sql="select * from new";
        $result=$conn-> query($sql);
    
        while($rows=mysqli_fetch_assoc($result)){
        ?>
            <div class="item">
            <h2 style="font-weight: bold;"><?php echo $rows['name']?></h2>
            (<?php echo $rows['type']?>)
            <p><?php echo $rows['prodsum']?></p>
            <h4 style="font-weight: bold;">Price : <?php echo $rows['price']?></h4>
            <p>Warranty : <?php echo $rows['warranty']?> years</p>
            <p style="font-weight: bold;">Seller Details :</p>
            <p><?php echo $rows['sname']?> : +91 <?php echo $rows['snum']?></p>
            </div>
        <?php
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