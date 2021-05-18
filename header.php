<?php

require("auth.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="mySidenav" class="sidenav">
    <p class="username">
        Welcome
        <?php echo $_SESSION['username']; ?>!
        <span href="javascript:void(0)" class="closebtn" style="padding-top:15px;" onclick="closeNav()">&times;</span>
    </p>

    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

 <div>
    <div>
        <header class="card-header"style="background-color: #131921;">
            <div class="profile" onclick="openNav()">&#9776; &nbsp;Profile</div>
            <br>
            <div class="row" style="margin-left: 15px;">
                <div class="col-sm-2 ">
                    <a class="headings" href="header.php" >HOME</a>
                </div>
                <div class="col-sm-3 ">
                    <a class="headings" href="Electronics.php">Electronics</a>
                </div>
                <div class="col-sm-3 ">
                    <a class="headings" href="mobiles.php">Mobiles</a>
                </div>
                <div class="col-sm-2 ">
                    <a class="headings" href="pantry.php" >Pantry</a>
                </div>
                <div class="col-sm-2 ">
                    <a class="headings" href="sports.php">Sports and fitness</a>
                </div>
            </div>
        </header>
        <footer class="card-footer">
            <div class="container">
                Copy rights isssued
            </div>
        </footer>
    </div>
 </div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
