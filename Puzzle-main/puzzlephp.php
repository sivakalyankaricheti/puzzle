
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="puzzle.css">
        <script src="puzzle.js"></script>
    </head>

    <style>
    body {
  	  background-image: url('loginbg.jpeg');
 	  background-repeat: no-repeat;
 	  background-attachment: fixed;
	  background-size: 100% 100%;
    }
    </style>
    <body>
        <br><br><br>
        <label id="minutes">00</label>
        <label id="colon">:</label>
        <label id="seconds">00</label>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> solve the below puzzle in correct order to get the image of letter <br>
	  After that solve the riddle and place your answer in the textfield below to advance further...But beware of the deadends</p>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> If you give the wrong answer you may take the wrong turn so think wisely </p><br><br>
        <div id="board"></div>
        <h1 style="color:white;">Turns: <span id="turns">0</span></h1>
        <div id="pieces"></div> <br>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> Enter your answer here </p>
	  <form method="POST">
            <div id = "answer1">
		    <input type="text" id="answer" name="answer" placeholder="Enter your answer" required>
	        </div><br><br>
            <button id="check" name="check">Check</button>
		</form>
    </body>

</html>

<?php
if (isset($_POST['check'])) {
    $ans = $_POST["answer"];
    $exp = "library";
    if ($ans == $exp) {
        header('Location:clue2.php');
    }
    else {
        echo "<script> alert('OOPS! You entered the Wrong Answer') </script>";
    }
    session_start();    
}
?>