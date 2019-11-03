function displaySeatDetails(){
	var element = document.getElementsByClassName("element");
	var values= '';
	for(var i=0; i<element.length; i++) {
		if(document.getElementsByClassName("element")[i].checked){
			var raw_seat_details = element[i].value;
			var seat_details_arr = raw_seat_details.split(",");
			var seat_name = seat_details_arr[1];
			var seat_price = seat_details_arr[0];
			document.getElementById("seat_name").innerHTML = seat_name; 
			document.getElementById("seat_price").innerHTML = seat_price;
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