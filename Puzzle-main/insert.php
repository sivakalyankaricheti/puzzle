<?php

// Retrieve session values
$id = $_SESSION['id'];
$score1 = $_SESSION['time1'];
$score2 = $_SESSION['time2'];
$score3 = $_SESSION['time3'];
$score4 = $_SESSION['time4'];
$score5 = $_SESSION['time5'];

// Prepare insert statement
$stmt = $pdo->prepare("INSERT INTO scores (id, score1, score2, score3, score4, score5) VALUES (?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $score1);
$stmt->bindParam(3, $score2);
$stmt->bindParam(4, $score3);
$stmt->bindParam(5, $score4);
$stmt->bindParam(6, $score5);

// Execute statement
$stmt->execute();

// Close statement and database connection
$stmt = null;
$pdo = null;

?>
