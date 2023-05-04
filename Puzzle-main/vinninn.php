<!DOCTYPE html>
<html>
<head>
	<title>User Score</title>
	<style>
		.container {
			margin: 0 auto;
			text-align: center;
			width: 50%;
		}
		table {
			border-collapse: collapse;
			margin: 20px 0;
			width: 100%;
		}
		table td, table th {
			border: 2px solid #ddd;
			padding: 10px;
			text-align: center;
		}
		table th {
			background-color: #f2f2f2;
		}
		#total-score {
			font-size: 30px;
			font-weight: bold;
			margin-top: 25px;
		}
		button {  
        font-size: 24px;
        color: 000000;
        background-color: white;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 5px #888;
        padding: 20px 40px;
        transition: all 0.3s ease;
        cursor: pointer;
}
button:hover {
        background-color: #2E8B57;
        box-shadow: 4px 4px 8px #888;
}

button:focus {
        outline: none;
}
	</style>
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
	<div class="container">
		<h1>User Score</h1>
		<table>
			<thead>
				<tr>
					<th>Clue</th>
					<th>Score</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style = "color: #f2f2f2;">Clue 1</td>
					<td id="clue1-score" style = "color: #f2f2f2;"></td>
				</tr>
				<tr>
					<td style = "color: #f2f2f2;">Clue 2</td>
					<td id="clue2-score" style = "color: #f2f2f2;"></td>
				</tr>
				<tr>
					<td style = "color: #f2f2f2;">Clue 3</td>
					<td id="clue3-score" style = "color: #f2f2f2;"></td>
				</tr>
				<tr>
					<td style = "color: #f2f2f2;">Clue 4</td>
					<td id="clue4-score" style = "color: #f2f2f2;"></td>
				</tr>
				<tr>
					<td style = "color: #f2f2f2;">Clue 5</td>
					<td id="clue5-score" style = "color: #f2f2f2;"></td>
				</tr>
			</tbody>
		</table>
		<div id="total-score" style = "color: #f2f2f2;"></div>
	</div>
	<button id = "mybtn" type="button">Check</button><br><br><br>
	<script>

		var clue1Score = Math.floor(2500/Number(sessionStorage.getItem("time1")));
		var clue2Score = Math.floor(2500/Number(sessionStorage.getItem("time2")));
		var clue3Score = Math.floor(2500/Number(sessionStorage.getItem("time3")));
		var clue4Score = Math.floor(2500/Number(sessionStorage.getItem("time4")));
		var clue5Score = Math.floor(2500/Number(sessionStorage.getItem("time5")));
		if (clue1Score > 20) {
			clue1Score = 20;
		}
		if (clue2Score > 20) {
			clue2Score = 20;
		}
		if (clue3Score > 20) {
			clue3Score = 20;
		}
		if (clue4Score > 20) {
			clue4Score = 20;
		}
		if (clue5Score > 20) {
			clue5Score = 20;
		}
		
		var totalScore = clue1Score + clue2Score + clue3Score + clue4Score + clue5Score;

		sessionStorage.setItem("totalscr", totalScore);
		document.getElementById("clue1-score").innerHTML = clue1Score;
		document.getElementById("clue2-score").innerHTML = clue2Score;
		document.getElementById("clue3-score").innerHTML = clue3Score;
		document.getElementById("clue4-score").innerHTML = clue4Score;
		document.getElementById("clue5-score").innerHTML = clue5Score;
		document.getElementById("total-score").innerHTML = "Total Score: " + totalScore;
		sessionStorage.clear();
		document.getElementById("mybtn").addEventListener("click", funny);
		function funny () {
			window.location.href = "mylogin.html";
		}
	</script>
</body>
</html>