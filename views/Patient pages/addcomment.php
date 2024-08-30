<?php

session_start();

// Check if the comment_text and email parameters are set
if (isset($_POST['comment_text'], $_POST['email'])) {
    // Get the comment text and email from the POST request
    $commentText = $_POST['comment_text'];
    $email = $_POST['email'];

    // Establish a database connection (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "mentalhealthcare");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert a new comment with email
    $stmt = $conn->prepare("INSERT INTO comments (email, comment_text) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $commentText);
    
    if ($stmt->execute()) {
        echo "Comment added successfully";
    } else {
        echo "Error adding comment: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Handle the case when comment_text or email parameter is not set
    echo "Comment text or email is not set";
}
?>
