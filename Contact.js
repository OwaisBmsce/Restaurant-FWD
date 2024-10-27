// script.js

// Function to display a welcome message when the home page is loaded
function displayWelcomeMessage() {
    if (window.location.pathname.endsWith('index.html')) {
        alert("Welcome to Our Restaurant!");
    }
}

// Function to handle form submission (if you decide to add a contact form later)
function handleContactFormSubmission(event) {
    event.preventDefault(); // Prevent the default form submission
    alert("Thank you for reaching out! We will get back to you soon.");
}

// Call the welcome message function when the page loads
window.onload = displayWelcomeMessage;

// If you have a contact form, you can add an event listener like this:
// const contactForm = document.getElementById('contactForm');
// if (contactForm) {
//     contactForm.addEventListener('submit', handleContactFormSubmission);
// }
