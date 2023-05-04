<?php
session_start();
?>

<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: aliceblue;
            color: #fff;
            padding: 35px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            float: right;
            font-size: 120%;
        }

        nav li {
            display: inline-block;
            margin-right: 16px;
        }

        nav a {
            color: #fff;
        }

        input[type="submit"] {
            background-color: white;
            width: 130%;
            height: 3%;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th,
        td {
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: aliceblue;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        input[type=submit]
        {
            width: 150px;
            height: 25px;
            color:black;
            background-color: blanchedalmond;
            font-size:large;
        }
    </style>
</head>

<body>
    <?php
        $host = 'localhost';
        $uname = 'root';
        $password = "";
        $dbname = "elitmusdb";
    
        $conn = mysqli_connect($host, $uname, $password, $dbname);
            <table border=3 align="center" cellpadding=10 cellspacing=0>
                <tr>
                    <th><b>ID</b></th>
                    <th><b>Name</b></th>
                    <th><b>Email</b></th>
                    <th><b>password</b></th>
                </tr>
                <?php
                if ($v) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                    }
                    echo "<br>";
                }
    ?>

</body>

</html>