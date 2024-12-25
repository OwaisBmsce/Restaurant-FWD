<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO bookings (name, date, time, guests) VALUES ('$name', '$date', '$time', '$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation made successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>