<?php

require("auth.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<div id="mySidenav" class="sidenav">
    <p class="username">Welcome <?php echo $_SESSION['username']; ?>!
        <span href="javascript:void(0)" class="closebtn"  style="padding-top:15px: " onclick="closeNav()">&times;</span>
</p>

    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

 <div>
    <div>
       <header class="card-header">
          <div style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; &nbsp;Profile</div><br>
           <div class="row">
               <div class="col-sm-1" style="margin-left: 15px">
                   <a href="" style="color: black; text-decoration: unset">HOME</a>
               </div>
               <div class="col-sm-3">
                   <a href="Electronics.php" style="color: black;text-decoration: unset">Electronics</a>
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
