var input;
window.onload = function() {
	if (sessionStorage.length == 0) {
        alert('YOU came back from DEADEND.You have to restart');
        window.location.href = "story.html";
    }
	var minutesLabel = document.getElementById("minutes");
	var secondsLabel = document.getElementById("seconds");
	var starttime = Date.now();
	console.log(starttime);
    if (sessionStorage["starttime"] == null) {
        sessionStorage.setItem("starttime", starttime);
    }
    else {
        starttime = Number(sessionStorage.getItem("starttime"));
    }
    var totalSeconds;
	var temp5;
	setInterval(setTime, 1000);
	function setTime() {
		totalSeconds = Date.now() - starttime;
        totalSeconds = Math.floor(totalSeconds/1000);
		secondsLabel.innerHTML = pad(totalSeconds%60);
	    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        // var timerValue = document.getElementById("timer").innerHTML;
		temp5 = totalSeconds - Number(sessionStorage.getItem("time4")) - Number(sessionStorage.getItem("time3")) - Number(sessionStorage.getItem("time2")) - Number(sessionStorage.getItem("time1"));
		sessionStorage.setItem("time5", temp5);
	}

	function pad(val) {
	    var valString = val + "";
	    if(valString.length < 2) {
	        return "0" + valString;
	    }
	    else {
	        return valString;
	    }
	}
            let tile = document.createElement("img");
            tile.src = "clue5.jpg";
            document.getElementById("board").append(tile);
			document.getElementById("mybtn").addEventListener("click", funny);
}

function funny () {
	let res = "";
	input = document.getElementById('tf1').value;
	res = res + String(input).toLowerCase();
	input = document.getElementById('tf2').value;
	res = res + String(input).toLowerCase();
	input = document.getElementById('tf3').value;
	res = res + String(input).toLowerCase();
	input = document.getElementById('tf4').value;
	res = res + String(input).toLowerCase();
	if (res == "06091805" || res == "69185") {
		window.location.href = "vinninn.php";
	}
	else {
		alert("OOPS! You entered the Wrong Answer");
	}	
}