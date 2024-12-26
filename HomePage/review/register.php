<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $remarks = $_POST['remarks'];
    $date = $_POST['date'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO ratings (name, remarks, date, rating) VALUES ('$name', '$remarks', '$date', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Rating made successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


