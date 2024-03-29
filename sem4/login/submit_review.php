<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "login");

// Retrieve data from AJAX request
$rating = $_POST['rating'];
$comment = $_POST['comment'];

// Insert data into database
mysqli_query($conn, "INSERT INTO reviews (rating, comment) VALUES ('$rating', '$comment')");

// Close connection
mysqli_close($conn);

// Return success message
echo "Review submitted successfully!";
?>
