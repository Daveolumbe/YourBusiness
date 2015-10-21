//Custom JavaScript By David Olumbe

/* Normal Js script Form Validation */
function Validate(userReg) {


	var emailerror = document.getElementById("emailtxt").value;



	if (emailerror === "") {
		document.getElementById("emailtxt").style.borderColor  = "#ec1e52";
	}




	else {
		document.getElementById("emailtxt").style.borderColor  = "";
	}



	if (emailerror != ""){

		document.getElementById("hide").style.display  = "none";
		document.getElementById("show").style.display  = "block";
	}


};