<?php include('db.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>


<div class= "wrapper" >
    <div class="row">
        <div class="col-lg-3">
    <form action="signup.php" method="post">
        <div>
            <h1 style="font-size: medium">Registration form</h1>
        </div>
        <div>
            <label for="username"><b>Username</b></label>
            <input class="form-control" type="text" name="username" required>
        </div>

        <div>
            <label for="phonenumber"><b>Phonenumber</b></label>
            <input class="form-control" type="text" name="phonenumber" required>
        </div>

        <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
            <label for="email"><b> Email </b></label>
            <input class="form-control" type="email" name="email" required>
            <?php if (isset($email_error)): ?>
                <span><?php echo "<h5 class='email_invalid' STYLE=''>$email_error</h5>" ?></span>
            <?php endif ?>
        </div>

        <div>
            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" required>
        </div><br>
        <a href="login.php" class="col-sm-6" >
            <input class="btn btn-primary form-control"  type="submit" name="create" value=" Sign Up">
        </a>
        <br>
        <p> Already a member  <a href = "login.php">Sign In</a></p>
    </form>
        </div>
    </div>
</div>
</body>
</html>
