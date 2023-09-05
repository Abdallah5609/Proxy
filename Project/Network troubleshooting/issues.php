<?php
require "server.php";
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Insert the new issue into the database
    $sql = "INSERT INTO issues (title, description) VALUES ('$title', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Issue submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$sql = "SELECT * FROM issues";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Issue Title: " . $row["title"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "Status: " . $row["status"] . "<br>";
        echo "Created At: " . $row["created_at"] . "<br><hr>";
    }
} else {
    echo "<br> No issues found.";
}

// Close the database connection
$conn->close();
?>