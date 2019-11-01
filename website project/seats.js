function displaySeatDetails(){
	var element = document.getElementsByClassName("element");
	var values= '';
	for(var i=0; i<element.length; i++) {
		if(document.getElementsByClassName("element")[i].checked){
			document.getElementById("seat_name").innerHTML = element[i].id; 
			document.getElementById("seat_price").innerHTML = element[i].value;
		}
	}
}


function init() {
    'use strict';
    
    // Confirm that document.getElementById() can be used:
    if (document && document.getElementById) {
        var menuForm = document.getElementById('seats');
        //menuForm.onsubmit = validateForm;
    }

}

window.onload = init;