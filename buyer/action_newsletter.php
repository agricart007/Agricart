<?php
include ("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];

    // Validate data
    if (!empty($email)) {
        // Insert data into database
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
        if ($conn->query($sql) === TRUE) {
            // Redirect after successful insertion
            header("Location: index.php");
            exit(); // Ensure script execution stops after redirection
        } else {
            // Error handling if query execution fails
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }

    // Close the database connection
    $conn->close();
}
?>
