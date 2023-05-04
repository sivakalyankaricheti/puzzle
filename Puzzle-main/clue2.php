
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="clue2css.css">
        <script src="clue2js.js"></script>
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
	  <p style="font-size: 1.5rem; color: #f2f2f2"> Mr.Xavier went to the library and using his influence found a book she was reading... the author of this book is none other than William Shakespeare....On examining it he found a paper being torn out of it....to make it easy for you he searched for the missing paper and found one on the internet....But as you know  the Writing Style of Shakespeare is a bit tricky and he is unable to figure out what that page means....Help him find his love of life </p><br><br>
	  <p style="font-size: 1.25rem; color: #f2f2f2"> solve the below Riddle to get to the next  clue <br>
	  place your answer in the textfield below to advance further...But beware of the deadends</p>
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
    $exp = "hospital";
    if ($ans == $exp) {
        header('Location:clue3.php');
    }
    else {
        echo "<script> alert('OOPS! You entered the Wrong Answer') </script>";
    }
}
?>