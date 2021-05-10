<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = "";
$email_error = false;
$errors = array();


   if(isset($_POST['create'])){
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_e = "SELECT * FROM phptutorial.signup   WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_e) > 0) {
        $email_error = "Email already exist";
    } else {
        $query = "INSERT INTO phptutorial.signup (username, phonenumber,email, password) 
                VALUES ('$username', '$phonenumber','$email', '" . md5($password) . "')";
        $results = mysqli_query($conn, $query);
    }

}



