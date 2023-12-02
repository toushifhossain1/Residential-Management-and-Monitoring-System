<?php
session_start();

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$database = "residential_management";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$occupation = $_POST['occupation'];

// Perform validation and authentication (you should hash the password in a real-world scenario)
// ...

// Example redirect to different dashboards based on occupation
switch ($occupation) {
    case 'flatowner':
        header('Location: flatowner_dashboard.php');
        break;
    case 'renter':
        header('Location: renter_dashboard.php');
        break;
    case 'rentee':
        header('Location: rentee_dashboard.php');
        break;
    case 'manager':
        header('Location: manager_dashboard.php');
        break;
    case 'guard':
        header('Location: guard_dashboard.php');
        break;
    case 'servant':
        header('Location: servant_dashboard.php');
        break;
    default:
        echo "Invalid occupation";
}

$conn->close();
?>
