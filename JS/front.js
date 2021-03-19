// Global functions
function elementID(ID) {
	return document.getElementById(ID);
}


// Ajax
function reqBirthdateCalc(userBirthdate) {
	// Start Ajax
	let calcSecs;
	if (window.XMLHttpRequest) {
		calcSecs = new XMLHttpRequest();
	} else {
		calcSecs = new ActiveXObject("Microsoft.XMLHTTP");
	}

	let fd_calcSecs = new FormData();
	fd_calcSecs.append("birthdate", userBirthdate);

	calcSecs.open("POST", "PHP/test4_calcSecBirthdates.php", true);
	calcSecs.responseType = "text";
	calcSecs.onreadystatechange = function() {
		if (calcSecs.readyState === 4 && calcSecs.status === 200) {
			console.log(calcSecs.getAllResponseHeaders());
			let resObject = JSON.parse(this.responseText);
			console.log("This comes from the back" + calcSecs.responseText);
			console.log(resObject);

		}
	}

	calcSecs.send(fd_calcSecs);
}

elementID("submit_birthdate").addEventListener("click", function(event) {
	event.preventDefault();
	let userbirthdate = elementID("birthdate").value;
	console.log(userbirthdate);
	reqBirthdateCalc(userbirthdate);

	let date = new Date(userbirthdate);
	let secs = date.getTime() / 1000;
	console.log("Date in secs: " + secs);  
})