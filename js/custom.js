//Custom JavaScript By David Olumbe

/* Normal Js script Form Validation */
function Validate(userReg) {


	var emailerror = document.getElementById("email").value;



	if (emailerror === "") {
		document.getElementById("email").style.borderColor  = "#ec1e52";
	}




	else {
		document.getElementById("email").style.borderColor  = "";
	}



	if (emailerror != ""){

		document.getElementById("hide").style.display  = "none";
		document.getElementById("show").style.display  = "block";
	}


};


// create angular app
    
    var validationApp = angular.module('validationApp', ['ngRoute']);

    // create angular controller
    validationApp.controller('mainController', function($scope) {

        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {

            // check to make sure the form is completely valid
            if ($scope.userReg.$valid) {
               // alert('Congrats we have received you data');
            }

        };

    });
