
var rows = 3;
var columns = 3;

var currTile;
var otherTile; //blank tile

var turns = 0;

var imgOrder = ["14", "12", "18", "15", "11", "16", "17", "19", "10"];

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
    var temp4;
	setInterval(setTime, 1000);
	function setTime() {
		totalSeconds = Date.now() - starttime;
        totalSeconds = Math.floor(totalSeconds/1000);
		secondsLabel.innerHTML = pad(totalSeconds%60);
	    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        temp4 = totalSeconds - Number(sessionStorage.getItem("time3")) - Number(sessionStorage.getItem("time2")) - Number(sessionStorage.getItem("time1"));
		sessionStorage.setItem("time4", temp4);
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
    for (let r=0; r < rows; r++) {
        for (let c=0; c < columns; c++) {

            let tile = document.createElement("img");
            tile.id = r.toString() + "-" + c.toString();
            tile.src = imgOrder.shift() + ".jpg";

            //DRAG FUNCTIONALITY
            tile.addEventListener("dragstart", dragStart);  
            tile.addEventListener("dragover", dragOver);    
            tile.addEventListener("dragenter", dragEnter);
            tile.addEventListener("dragleave", dragLeave);
            tile.addEventListener("drop", dragDrop);
            tile.addEventListener("dragend", dragEnd);

            document.getElementById("board").append(tile);

        }
    }
}

function dragStart() {
    currTile = this; //this refers to the img tile being dragged
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
    if (!otherTile.src.includes("C:/Users/wwwpr/Pictures/myElitmusProj/10.jpg")) {
        return;
    }

    let currCoords = currTile.id.split("-"); 
    let r = parseInt(currCoords[0]);
    let c = parseInt(currCoords[1]);

    let otherCoords = otherTile.id.split("-");
    let r2 = parseInt(otherCoords[0]);
    let c2 = parseInt(otherCoords[1]);

    let moveLeft = r == r2 && c2 == c-1;
    let moveRight = r == r2 && c2 == c+1;

    let moveUp = c == c2 && r2 == r-1;
    let moveDown = c == c2 && r2 == r+1;

    let isAdjacent = moveLeft || moveRight || moveUp || moveDown;

    if (isAdjacent) {
        let currImg = currTile.src;
        let otherImg = otherTile.src;

        currTile.src = otherImg;
        otherTile.src = currImg;

        turns += 1;
        document.getElementById("turns").innerText = turns;
    }

}
