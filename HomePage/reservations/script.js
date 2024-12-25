const signUpButton=document.getElementById('reserveButton');

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("reservationForm");

    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Prevent the form from refreshing the page

        // Collect form data
        const name = document.getElementById("name").value;
        const date = document.getElementById("date").value;
        const time = document.getElementById("time").value;
        const guests = document.getElementById("guests").value;

        // Validate inputs
        if (!name || !date || !time || !guests) {
            alert("Please fill in all the fields.");
            return;
        }

        // Simulate sending data to the server
        console.log("Reservation Details:");
        console.log(`Name: ${name}`);
        console.log(`Date: ${date}`);
        console.log(`Time: ${time}`);
        console.log(`Guests: ${guests}`);

        // Show success message
        alert("Your reservation has been submitted!");

        // Optionally, reset the form
        form.reset();
    });
});
