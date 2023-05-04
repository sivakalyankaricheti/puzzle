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
    $sql = "select * from users where email='$email' and password='$pwd'";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['name'] = $name;
        $_SESSION['id'] = $id;
        header('Location:story.html');
    } 
    else {
        echo "<script> alert('Invalid Credentials')</script>";
        header('Location:myregister.html');
    }
}

?>