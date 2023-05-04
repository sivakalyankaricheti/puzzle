var rows = 3;
var columns = 3;

var currTile;
var otherTile;
var turns = 0;

window.onload = function() {
    var minutesLabel = document.getElementById("minutes");
	var secondsLabel = document.getElementById("seconds");
	var starttime = Date.now();
    if (sessionStorage["starttime"] == null) {
        sessionStorage.setItem("starttime", starttime);
    }
    else {
        starttime = Number(sessionStorage.getItem("starttime"));
    }
    var totalSeconds;
	setInterval(setTime, 1000);
	function setTime() {
		totalSeconds = Date.now() - starttime;
        totalSeconds = Math.floor(totalSeconds/1000);
		secondsLabel.innerHTML = pad(totalSeconds%60);
	    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        sessionStorage.setItem("time1", totalSeconds);
        // var timerValue = document.getElementById("timer").innerHTML;
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

    let board = [];
	for (let i=1; i <= rows*columns; i++) {
        board.push(i.toString());
    }
    for (let c = 0; c < columns; c++) {
        for (let r = 0; r < rows; r++) {
            let tile = document.createElement("img");
            tile.src = "blank.jpg";
            tile.addEventListener("dragstart", dragStart); 
            tile.addEventListener("dragover", dragOver);   
            tile.addEventListener("dragenter", dragEnter); 
            tile.addEventListener("dragleave", dragLeave); 
            tile.addEventListener("drop", dragDrop);       
            tile.addEventListener("dragend", dragEnd);  

            document.getElementById("board").append(tile);
        }
    }

    let pieces = [];
    for (let i=1; i <= rows*columns; i++) {
        pieces.push(i.toString());
    }
    pieces.reverse();

    for (let i = 0; i < pieces.length; i++) {
        let tile = document.createElement("img");
        tile.src = pieces[i] + ".jpg";
        tile.addEventListener("dragstart", dragStart); 
        tile.addEventListener("dragover", dragOver);   
        tile.addEventListener("dragenter", dragEnter); 
        tile.addEventListener("dragleave", dragLeave); 
        tile.addEventListener("drop", dragDrop);       
        tile.addEventListener("dragend", dragEnd);

        document.getElementById("pieces").append(tile);
    }
}

function dragStart() {
    currTile = this; 
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
}

function dragLeave() {

}

function dragDrop() {
    otherTile = this; 
}

function dragEnd() {
    if (currTile.src.includes("blank")) {
        return;
    }
    let currImg = currTile.src;
    let otherImg = otherTile.src;
    currTile.src = otherImg;
    otherTile.src = currImg;
    
    turns += 1;
    document.getElementById("turns").innerText = turns;
}