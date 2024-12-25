<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="Logo.png" alt="Restaurant Logo" class="logo"> <!-- Add your logo image here -->
        </div>
        
        <nav>
            <ul>
                <li><a href="HomePage.html">Home</a></li>
                <li><a href="MenuPage.html">Menu</a></li>
                <li><a href="AboutUsPage.html">About Us</a></li>
                <li><a href="ContactPage.html">Contact</a></li>
                <li><a href="http://localhost/reservation/index2.php">Reservation</a></li>
                <li><a href="orders.html">Orders</a></li>
            </ul>
        </nav>
        
    </header>
    <main>
        <section id="reservation">
            <h1>Make a Reservation</h1>
            <p>We would love to host you! Please fill out the form below to make a reservation.</p>
            <form id="reservationForm" action="register.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Your Name">
        
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
        
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
        
                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" required placeholder="Number of Guests" min="1">
        
                <button type="submit" class="reserveButton">Reserve Now</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restaurant Webpage</p>
    </footer>
    <script src="script.js">
        function redirectToReservation() {
            window.location.href = 'http://localhost/reservation/index2.php'; // Redirect to the desired page
        }
    </script> <!-- Link to external JavaScript -->
</body>
</html>
  