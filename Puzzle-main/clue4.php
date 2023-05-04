<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Slide Puzzle</title>
        <link rel="stylesheet" href="clue4css.css">
        <script src="clue4js.js"></script>
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
	  <p style="font-size: 1.5rem; color: #f2f2f2"> I'm truly amazed by your Intelligence and your Eye for Detail...You've reached until here which means you are one step closer in reaching your destination....this is the current scenario.....You've found out the place and told Mr.Xavier about it and he took you to a Starbucks branch where they usually go to.....There the manager recognised Mr.Xavier and gave him a custom made "SLIDER PUZZLE" that his wife asked him to give when he visits the shop next time....Solve the slider puzzle and move one step closer in finding Mr.Xavier's wife</p><br><br>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> solve the below puzzle to get to the next clue <br>
	  place your answer in the textfield below to advance further.....But beware of the deadends</p>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> If you give the wrong answer you may take the wrong turn so think wisely </p><br><br>
        <div id="board">
        </div>
        <h1 style = "color:white">Turns: <span id="turns" style = "color:white">0</span></h1>
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
    $exp = "the last supper";
    if ($ans == $exp) {
        header('Location:clue5.html');
    }
    else {
      header('Location:deadend.html');
    }
}
?>