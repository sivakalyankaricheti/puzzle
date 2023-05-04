<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["username"];
    $pwd = $_POST["password1"];


    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "elitmusdb";
    $conn = mysqli_connect($host, $uname, $password, $dbname);
    if ($conn) {
        echo "Connection successful.";
    } 
    else {
        echo "Connection Failed.";
    }
    $sql = "select * from admin where email='$email' and password='$pwd'";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
        header('Location:stats.php');
    } 
    else {
        echo "<script> alert('Invalid Credentials')</script>";
    }
}

?>