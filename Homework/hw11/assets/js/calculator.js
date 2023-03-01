// JavaScript Document
function calc(){
	var num1 = document.getElementById("num1").value;
	var num2 = document.getElementById("num2").value;
	var answer;
	var regEx = /^\d+$/;
	if (!num1.match(regEx) || !num2.match(regEx)){
		if(!num1.match(regEx)){
			document.getElementById('num1Help').innerHTML = 'Integers only please!';
		}else{
			document.getElementById('num1Help').innerHTML = '';
		}
		if(!num2.match(regEx)){
			document.getElementById('num2Help').innerHTML = 'Integers only please!';
		}else{
			document.getElementById('num2Help').innerHTML = '';
		}
	}else{
		document.getElementById('num1Help').innerHTML = '';
		document.getElementById('num2Help').innerHTML = '';
		var option = document.getElementById('funct').value;
		var output = document.getElementById("answer");
		var remainder;
		if(option == 'multiply'){
			answer = parseInt(num1) * parseInt(num2);
		}else if(option == 'divide'){
			answer = parseInt(num1) / parseInt(num2);
			remainder = parseInt(num1) % parseInt(num2);
		}else if(option == 'add'){
			answer = parseInt(num1) + parseInt(num2);
		}else if(option == 'subtract'){
			answer = parseInt(num1) - parseInt(num2);
		}else{
			console.log('Invalid option selected.');
		}
		if(option == 'divide'){
			output.innerHTML = '<h2>The answer is: ' + parseInt(answer) + ' remainder '+ parseInt(remainder) + '<h2>';
		}else{
			output.innerHTML = '<h2>The answer is: ' + parseInt(answer) + '<h2>';
		}		
	}
}