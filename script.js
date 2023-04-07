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
