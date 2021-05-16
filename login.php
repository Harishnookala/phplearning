<?php include('db.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

<br>
 <div class="container">
   <div class="row">
       <div class="col-lg-4">
         <form action="login.php" method="post">
            <div>
                  <h3>Login Form</h3>
            </div>
           <div>
               <label for="Email"><b>Email</b></label>
               <input class="form-control" name="email" type="text" required></div>
           <div>
               <label for="password"><b>Password</b></label>
               <input class="form-control" name="password" type="password" required>
           </div><br>
           <div class="col-lg-3" >
               <input type="submit" class="btn btn-outline-success" name="login" value="Login" style="width: 200px">
           </div><br>
             <div <?php if (isset($email_valid)): ?> class="form_error" <?php endif ?> >
                 <?php if (isset($email_valid)): ?>
                     <span><?php echo "<h5 class='email_invalid' STYLE=''>$email_valid</h5>" ?></span>
                 <?php endif ?>
             </div>
             <p style="font-size: 19px"> Not a member  <a href = "signup.php">Sign Up</a></p>

         </form>
       </div>
   </div>
 </div>

</body>
</html>
