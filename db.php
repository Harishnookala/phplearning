<?php

$servername = "localhost";
$username = "root";
$password = "";
$DATABASE = "phptutorial";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = "";
$email_error = false;
$errors = array();

$email_valid = "";




   if(isset($_POST['create'])){
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_e = "SELECT * FROM signup WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_e) > 0) {
        $email_error = "Email already exist";
    } else {
        $query = "INSERT INTO signup (username, phonenumber,email, password) 
                VALUES ('$username', '$phonenumber','$email', '" . md5($password) . "')";
        $results = mysqli_query($conn, $query);
        header("location: login.php");

    }

}



   if(isset($_POST['login'])){
       $email  = $_POST['email'];
       $password = $_POST['password'];
       $login_query = "SELECT * FROM phptutorial.signup WHERE email='$email'
AND password='$password'";
       $result = mysqli_query($conn,$login_query);
       $count = mysqli_num_rows($result);

       if($count == 1){
            $query = "select username from signup where email = '$email'";
            $value = mysqli_query($conn,$query);
            $row = $value->fetch_row();
            $value = $row[0] ? : false;
            session_start();
            $_SESSION['username'] = $value;
              header("location:header.php");
       }
       else{
           $email_valid = "Your Email_id or Password is not valid";
       }

      // $query = "select username from signup where email = $email";

   }



