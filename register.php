<?php
session_start(); // Start the session (if not started already)

include 'db_connect.php'; // Include the file containing your database connection code

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

        // Example hashing (replace with appropriate secure password hashing)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into 'users' table
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

        if ($conn->query($insert_query) === TRUE) {
            echo 'Your account is regiserd, please log in.'
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
?>
