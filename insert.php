<?php
// Database connection details
$servername = "sql301.infinityfree.com"; // MySQL Host Name
$username = "if0_38885124";              // MySQL User Name
$password = "bc4JmtXDlPjCx7Z";           // Your InfinityFree control panel password
$dbname = "if0_38885124_ticket_zone";    // MySQL Database Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data to insert
$user_id = 1;  // Example: 1
$first_name = 'Ali';  // First name
$last_name = 'Ahmad'; // Last name
$email = 'ali@example.com';  // Email address
$phone = '0500000000';  // Phone number
$birthdate = '2000-01-01';  // Birthdate
$sex = 'M';  // Gender
$user_type = 'Customer';  // User type

// Insert query
$sql = "INSERT INTO User (User_ID, FName, LName, Email, Phone_Number, BirthDate, Sex, User_type) 
        VALUES ($user_id, '$first_name', '$last_name', '$email', '$phone', '$birthdate', '$sex', '$user_type')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
