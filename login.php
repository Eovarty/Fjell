<?php
// Start the session to manage users sessions
session_start();

// Include the file containing the database connection code
include 'db_connect.php';

// Check if the form data is sent using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the POST data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a SQL query to retrieve users details based on the provided username
    $sql = "SELECT userID, username, password FROM users WHERE username = '$username'";
    
    // Execute the SQL query
    $result = $conn->query($sql);

    // Check if a userswith the provided username exists
    if ($result->num_rows == 1) {
        // Fetch the usersdata
        $row = $result->fetch_assoc();

        // Verify if the provided password matches the hashed password in the database
        if (password_verify($password, $row['password'])) {
            // Set session variables upon successful login
            $_SESSION['userID'] = $row['userID']; // Store the usersID in the session            
            // Redirect the usersto the index.php page (or any desired page after successful login)
            header('Location: ticket.html');
            exit(); // Terminate the script after redirection
        } else {
            // Password verification failed
            echo "Invalid username or password";
        }
    } else {
        // No usersfound with the provided username
        echo "Invalid username or password";
    }
}
?>
