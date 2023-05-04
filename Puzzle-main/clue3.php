
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="clue3css.css">
        <script src="clue3js.js"></script>
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
        <br><br>
		<label id="minutes">00</label>
        <label id="colon">:</label>
        <label id="seconds">00</label><br>
	  <p style="font-size: 1.5rem; color: #f2f2f2"> Well....you are here that means you have solved the previous riddle...congratulations...you are truly good...but challenges are going get harder now....so here's the scenario now....You found the and came to the hospital where his wife often visits for her appointments and now you wandered here and there and this billboard opposite to the hospital caught your eye...can you decode what messege the billboard is  giving you...Hope you remember your previous clues well....Everything is Important....Who knows which clue will help you at an given time.....So use your detective brain to help MR.Xavier move one step forward in finding his wife </p><br><br>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> solve the below puzzle to get to the next clue <br>
	  place your answer in the textfield below to advance further.....But beware of the deadends</p>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> If you give the wrong answer you may take the wrong turn so think wisely </p><br><br>
        <div id="board"></div>
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
    $exp = "starbucks";
    if ($ans == $exp) {
        header('Location:clue4.php');
    }
    else {
        header('Location:deadend.html');
    }
}
?>