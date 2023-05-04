<html>
    <body>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $host = "localhost";
    $uname = "root";
    $password = "";
    $dbname = "elitmusdb";
    $connection = mysqli_connect($host, $uname, $password, $dbname);
    $result = mysqli_query($connection, "select count(1) FROM users");
    $row = mysqli_fetch_array($result);
    $id = $row[0] + 1;
    if (isset($connection)) {
        echo "Database connected successfully" . "<br>";

        if (isset($_POST['register'])) {
            $query = "insert into users(id,name,email,password)
                values('$id','$name','$email','$pwd')";
            if (mysqli_query($connection, $query)) {
                echo "Database connected successfully" . "<br>";
            }
        }
        
    }
    else {
        echo "<script>alert('connection failed')</script>";
    }
    ?>
    <?php
        header("Location: mylogin.html");
        ?>
    </body>
</html>