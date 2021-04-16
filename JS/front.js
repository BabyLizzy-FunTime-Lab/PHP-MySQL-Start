// Global functions
function elementID(ID) {
	return document.getElementById(ID);
}

function render_date_age(date, age_years, section_ID) {
	let section = elementID(section_ID).children;
	for (var ele = 0; ele < section.length; ele++) {
		if (ele == 1) {
			section[ele].innerText = "Date: " + date;
		} else if (ele == 2) {
			section[ele].innerText = "Your age on this day: " + age_years + " years.";
		}
	}
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
			
			let ageStart = resObject.age;
			elementID("ageSec").innerText = "Now: " + ageStart.toLocaleString(undefined,{ minimumFractionDigits: 0 });
			let ageNow = ageStart;
			let age = setInterval(function() {
				ageNow++;
				elementID("ageNow").innerText = "Right Now: " + ageNow.toLocaleString(undefined,{ minimumFractionDigits: 0 });
			}, 1000)
			render_date_age(resObject.onemillion.date, resObject.onemillion.age_years, "onemil");
			render_date_age(resObject.half_billion.date, resObject.half_billion.age_years, "halfbillion");
			render_date_age(resObject.onebillion.date, resObject.onebillion.age_years, "onebillion");
			render_date_age(resObject.onehalf_billion.date, resObject.onehalf_billion.age_years, "one&halfBillion");
			render_date_age(resObject.twobillion.date, resObject.twobillion.age_years, "twobillion");
			render_date_age(resObject.twohalf_billion.date, resObject.twohalf_billion.age_years, "two&halfBillion");
			render_date_age(resObject.treebillion.date, resObject.treebillion.age_years, "treebillion");
		}
	}
	calcSecs.send(fd_calcSecs);
}

// Eventhandlers
elementID("submit_birthdate").addEventListener("click", function(event) {
	event.preventDefault();
	let userbirthdate = elementID("birthdate").value;
	console.log(userbirthdate);
	reqBirthdateCalc(userbirthdate);

	// let date = new Date(userbirthdate);
	// let secs = date.getTime() / 1000;
	// console.log("Date in secs: " + secs);  
})

elementID("onemil_calender").addEventListener("click", function(event) {
	event.preventDefault();
	console.log("I work");
})