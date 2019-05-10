function FastToggle(ID) {
	var x = document.getElementById(ID);
	if (x.style.display === "none") {
	x.style.display = "inline-block";
	} else {
		x.style.display = "none";
	}
} 
function RadioToggle(ID) {
	
	var x = document.getElementById(ID);
	
		switch(x){
		case "+":
			svar = (tal1 + tal2);
		break;
		case "-":
			svar = (tal1 - tal2);
		break;
		case "*":
			svar = (tal1 * tal2);
		break;
		case "/":
			svar = (tal1 / tal2);
		break;
}
