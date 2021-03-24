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
			let resObject = JSON.parse(this.responseText);
			console.log(resObject);

			elementID("ageSec").innerText = "Now: " + resObject.age;
			let ageStart = resObject.age;
			let ageNow = ageStart;
			let age = setInterval(function() {
				ageNow++;
				elementID("ageNow").innerText = "Right Now: " + ageNow;
			}, 1000)
			elementID("onemil").innerText = resObject.onemillion;
			elementID("halfbillion").innerText = resObject.half_billion;
			elementID("onebillion").innerText = resObject.onebillion;
			elementID("one&halfBillion").innerText = resObject.onehalf_billion;
			elementID("twobillion").innerText = resObject.twobillion;
			elementID("two&halfBillion").innerText = resObject.twohalf_billion;
			elementID("treebillion").innerText = resObject.treebillion;
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