<?php

// Establish a database connection (replace with your database credentials)
$conn = new mysqli("localhost", "root", "", "mentalhealthcare");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to retrieve comments with email
$sql = "SELECT email, comment_text FROM comments ORDER BY timestamp DESC";
$result = $conn->query($sql);

// Check if there are any comments
if ($result->num_rows > 0) {
    // Fetch comments and store them in an array
    $comments = array();
    while ($row = $result->fetch_assoc()) {
        $comments[] = array(
            'email' => $row['email'],
            'comment' => $row['comment_text'],
        );
    }

    // Output comments as a JSON array
    echo json_encode($comments);
} else {
    // Output an empty array if there are no comments
    echo json_encode(array());
}

// Close the result and connection
$result->close();
$conn->close();

?>
