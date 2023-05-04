var input;
window.onload = function() {
	var minutesLabel = document.getElementById("minutes");
	var secondsLabel = document.getElementById("seconds");
	var totalSeconds = 150;
	setInterval(setTime, 1000);
	function setTime() {
		if (totalSeconds > 0) {
			--totalSeconds;
	    	secondsLabel.innerHTML = pad(totalSeconds%60);
	        minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
		}
		else {
			window.location.href = "404.html";
		}            
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
	sessionStorage.clear();
	let tile = document.createElement("img");
    tile.src = "deadend.jpg";
    document.getElementById("board").append(tile);
	document.getElementById("mybtn").addEventListener("click", funny);
   
}

function funny () {
	var input = document.getElementById('answer').value;
	let str = String(input).toLowerCase();
	if (str == "riddle") {
		window.location.href = "404.html";
	}
	else {
		alert("OOPS! You entered the Wrong Answer");
	}	
}
