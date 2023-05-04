<?php
if (isset($_POST['start-btn'])) {
	$_SESSION['start'] = time();
	header('Location: puzzlephp.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Fabled Treasure</title>
	<link rel="stylesheet" type="text/css" href="startcss.css">
</head>
<style>
	body {
		background-image: url('storybg1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
	}
	header {
		background-image: url('storybg1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<body>
	<header>
		<h1>The Fabled Treasure</h1>
	</header>
	<main>
		<p>You are a young detective, and you have been hired by a wealthy industrialist, Mr. Xavier, to investigate the mysterious disappearance of his wife, Mrs. Xavier. Mr. Xavier is convinced that his wife has been kidnapped, but the police have been unable to find any leads.</p>
		<br>
		<p>The case starts with a letter that Mr. Xavier gives you. The letter contains a cryptic message that hints at the location of the first clue.</p>
	
		<p>Click on the below start button to get your first clue the letter...But wait unfortunately the letter was torn into pieces...see what you can do to advance further...</p>
		
		<form method="POST">
            <button id="start-btn" name="start-btn">Start</button>
		</form>
	</main>
</script>
</body>
</html>
