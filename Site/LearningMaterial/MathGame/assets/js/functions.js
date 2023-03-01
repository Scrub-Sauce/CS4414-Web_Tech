// JavaScript Document

var playing = false;
var score;
var timer;
var timeRemaining;
var answer;

document.getElementById("startreset").onclick = function(){ // Click event for startreset button
	if(playing){ // if we are playing
		location.reload(); // reload page
	}else{ // if we are not playing
		playing = true; // Change state to playing
		score = 0; // set score to 0
		document.getElementById("gameover").style.display = "none"; // Make sure if game is being replayed game over is hidden
		document.getElementById("score_value").innerHTML = score; // Show score
		timeRemaining = 60;
		document.getElementById("timeremainingvalue").innerHTML = timeRemaining;
		document.getElementById("timeremaining").style.display = "block"; // show countdown box
		document.getElementById("startreset").innerHTML = "Reset Game";
		generateQuestion();
		starCountDown();
	}
}

function starCountDown() {
	timer = setInterval(function(){
		timeRemaining--;
		document.getElementById("timeremainingvalue").innerHTML = timeRemaining;
		if(timeRemaining <= 0){
			gameOver();
			clearInterval(timer);
		}
	}, 1000)
}

function gameOver(){
	playing = false;
	document.getElementById("gameover").innerHTML = "<p>Game Over!</p><p>Your score was: " + score + "</p>";
	document.getElementById("gameover").style.display = "block";
	document.getElementById("timeremaining").style.display = "none";
	document.getElementById("startreset").innerHTML = "Replay Game";
	document.getElementById("score_value").innerHTML = "";	
}

function generateQuestion(){
	var x = parseInt(Math.random() * 9 + 1);
	var y = parseInt(Math.random() * 9 + 1);
	var genBox = parseInt(Math.random() * 4 + 1);
	answer = x * y;
	document.getElementById("question").innerHTML = x + "x" + y;
	document.getElementById("box1").innerHTML = answer;
	switch(genBox){
		case 1:
			document.getElementById("box1").innerHTML = answer;
			document.getElementById("box2").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box3").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box4").innerHTML = parseInt(Math.random() * 100 + 1);
			break;
		case 2:
			document.getElementById("box1").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box2").innerHTML = answer;
			document.getElementById("box3").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box4").innerHTML = parseInt(Math.random() * 100 + 1);
			break;
		case 3:
			document.getElementById("box1").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box2").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box3").innerHTML = answer;
			document.getElementById("box4").innerHTML = parseInt(Math.random() * 100 + 1);
			break;
		case 4:
			document.getElementById("box1").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box2").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box3").innerHTML = parseInt(Math.random() * 100 + 1);
			document.getElementById("box4").innerHTML = answer;
			break;
		default:
			console.log("Error: Switch statement failed. genBox: " + genBox);
			break;
	}
}

function checkAnswer(ID){
	var elementID = ID;
	var timer;
	var resultTimer = 2;
	if(playing){
	var guess = document.getElementById(elementID).innerHTML;
		if(parseInt(guess) == parseInt(answer)){
			score++;
			document.getElementById("correct").style.display = "block";
			document.getElementById("score_value").innerHTML = score;
			timer = setInterval(function(){
				resultTimer--;
				if (resultTimer <= 0){
					document.getElementById("correct").style.display = "none";
					clearInterval(timer);
				}
			}, 1000)
			generateQuestion();
		}else{
			document.getElementById("wrong").style.display = "block";
			timer = setInterval(function(){
				resultTimer--;
				if (resultTimer <= 0){
					document.getElementById("wrong").style.display = "none";
					clearInterval(timer);
				}
			}, 1000)
			generateQuestion();
		}
	}
}