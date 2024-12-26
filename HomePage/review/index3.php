<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8e8;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #2d6a2d;
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        input, textarea, select, button {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #2d6a2d;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        button {
            background-color: #ffcc00;
            color: #000;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #e6b800;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
        .footer a {
            color: #2d6a2d;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
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
                <li><a href="http://localhost/review/index3.php">Review</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Submit Your Feedback</h1>
        <p>We value your feedback. Please fill out the form below!</p>
        <form id="reviewForm" action="register.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <textarea name="remarks" placeholder="Your Remarks" required></textarea>
            <input type="date" name="date" required>
            <select name="rating" required>
                <option value="" disabled selected>Select Rating</option>
                <option value="1">1 - Poor</option>
                <option value="2">2 - Fair</option>
                <option value="3">3 - Good</option>
                <option value="4">4 - Very Good</option>
                <option value="5">5 - Excellent</option>
            </select>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
    <div class="footer">
        &copy; 2024 Feedback Page. Designed with care.
    </div>

    <script src="script.js">
        function redirectToReview() {
            window.location.href = 'http://localhost/review/index3.php'; // Redirect to the desired page
        }
    </script>
</body>
</html>
