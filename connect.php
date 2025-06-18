<?php
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

// Sample data insert (adjust this to match your actual form/table)
$sql = "INSERT INTO User (User_ID, FName, LName, Email, Phone_Number, BirthDate, Sex, User_type)
VALUES (1, 'Ali', 'Ahmad', 'ali@example.com', '0500000000', '2000-01-01', 'M', 'Customer')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>