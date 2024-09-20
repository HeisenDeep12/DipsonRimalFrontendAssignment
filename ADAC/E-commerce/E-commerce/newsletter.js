(function() {
    emailjs.init("3hcbg_dmpmUKAn_eu");  
})();

// Function to send email
function SendMail(event) {
    event.preventDefault(); // Prevent form from refreshing the page

    // Collect the email input value
    var params = {
        email_id: document.getElementById('email_id').value, // Get the email value
    };

    // Send email using EmailJS
    emailjs.send('service_o01fu8l', 'template_9nzh8w3', params)
        .then(function(response) {
            alert('Thank you for signing up for our newsletter!');
        })
        .catch(function(error) {
            alert('Failed to sign up. Please try again.');
            console.log('Error:', error);
        });
}

// Attach the event listener to the form
document.getElementById('form').addEventListener('submit', SendMail);
