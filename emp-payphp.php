<?php
// Database configuration
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $empid = sanitizeInput($_POST["empid"]);
    $year = sanitizeInput($_POST["year"]);
    $month = sanitizeInput($_POST["month"]);
    $absence = sanitizeInput($_POST["absence"]);
    $overtime = sanitizeInput($_POST["overtime"]);
    $sbonus = sanitizeInput($_POST["sbonus"]);
    $obonus = sanitizeInput($_POST["obonus"]);

    // SQL query to update payment details
    $sql = "UPDATE employees SET year = '$year', month = '$month', absence = '$absence', overtime = '$overtime', sbonus = '$sbonus', obonus = '$obonus' WHERE empid = '$empid'";

    if ($conn->query($sql) === TRUE) {
        // Payment successfully set
        echo "Payment details successfully updated for Employee ID: " . $empid;
    } else {
        // Error handling
        echo "Error updating payment details: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
