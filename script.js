// Function to validate the contact form
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    
    if (name == "" || email == "" || message == "") {
        alert("Please fill out all fields.");
        return false;
    }
    
    return true;
}

// Add event listener to the contact form submit button
var form = document.querySelector("form");
form.addEventListener("submit", function(event) {
    event.preventDefault();
    if (validateForm()) {
        alert("Thank you for your message!");
        form.reset();
    }
});

const form = document.getElementById('contact-form');
form.addEventListener('submit', (event) => {
	event.preventDefault();
	const formData = new FormData(form);
	const xhr = new XMLHttpRequest();
	xhr.open('POST', 'sendContactForm.php');
	xhr.onload = () => {
		if (xhr.status === 200) {
			alert('Thanks for contacting us! We will get back to you soon.');
			form.reset();
		} else {
			alert('Oops! Something went wrong. Please try again later.');
		}
	};
	xhr.send(formData);
});
