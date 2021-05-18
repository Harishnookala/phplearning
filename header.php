<?php

require("auth.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="color: azure">
<div id="mySidenav" class="sidenav">
    <p class="username">
        Welcome
        <?php echo $_SESSION['username']; ?>!
        <span href="javascript:void(0)" class="closebtn" style="padding-top: 15px;" onclick="closeNav()">&times;</span>
    </p>

    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<div style="overflow: hidden">
    <div>
        <header class="card-header" style="background-color: #131921;">
            <div class="profile" onclick="openNav()">&#9776; &nbsp;Profile</div>
            <br />
            <div class="row heading_style" style="margin-left: 15px">
               <div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                    <a class="headings" href="header.php">HOME</a>
                 </div>
                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-4 ">
                    <a class="headings" href="Electronics.php">Electronics</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a class="headings" href="mobiles.php">Mobiles</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                    <a class="headings" href="pantry.php">Pantry</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a class="headings" href="sports.php">Sports and fitness</a>
                </div>
               </div>
            </div>
        </header>
        <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:15px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner container">
                <div class="item active">
                    <img src="Images/mobile_slide.jpg" style="width: 100%;height: 600px" />
                </div>
                <div class="item">
                    <img src="Images/electronics.jpg" style="width: 100%;height: 600px" />
                </div>
                <div class="item">
                    <img src="Images/pantry.jpg" style="width: 100%;height: 600px" />
                </div>
                <div class="item">
                    <img src="Images/sports.jpg" style="width: 100%;height: 600px" />
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-left: 15px">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="margin-right: 15px">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
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
