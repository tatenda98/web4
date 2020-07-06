function validateForm() {
	var uname = document.enquiries.userid;

	var uid = document.enquiries.userid;
	var phone = document.enquiries.phone;
	var email = document.enquiries.email;

	var check_letter_regex = /^[A-Za-z]+$/;
	var numbers = /^[0-9]+$/;
	var emails_fmt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if (!uname.value.match(check_letter_regex)) {
		alert(
			"Name must have letters only "
		);
		uname.focus();
	} else if (!phone.value.match(numbers)) {
		alert("phone number must have number.");
		phone.focus();
	} else if (!email.value.match(emails_fmt)) {
		alert("Please enter a valid email");
		email.focus();
		return false;
	} else {
		alert("Enquiry successful");
	}
}
function submitForm() {
	console.log("Enquiry successful.");
}
