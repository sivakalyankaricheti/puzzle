window.onload = function() {
	if (sessionStorage.length == 0) {
        alert('YOU came back from DEADEND.You have to restart');
        window.location.href = "story.html";
    }
	var minutesLabel = document.getElementById("minutes");
	var secondsLabel = document.getElementById("seconds");
	var starttime = Date.now();
    if (sessionStorage["starttime"] == null) {
        sessionStorage.setItem("starttime", starttime);
    }
    else {
        starttime = Number(sessionStorage.getItem("starttime"));
		console.log(starttime);
    }
    var totalSeconds;
	var temp3;
	setInterval(setTime, 1000);
	function setTime() {
		totalSeconds = Date.now() - starttime;
        totalSeconds = Math.floor(totalSeconds/1000);
		secondsLabel.innerHTML = pad(totalSeconds%60);
	    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
		temp3 = totalSeconds - Number(sessionStorage.getItem("time2")) - Number(sessionStorage.getItem("time1"));
		sessionStorage.setItem("time3", temp3);
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
            tile.src = "clue3.jpg";
            document.getElementById("board").append(tile);

}
