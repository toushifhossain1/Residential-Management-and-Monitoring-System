<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a valid database connection
    $link = mysqli_connect("localhost", "root", "", "rmms");

    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $userID = $_SESSION['UserID'];
    $leaseStartDate = $_POST['leaseStartDate'];
    $monthlyRentAmount = $_POST['monthlyRentAmount'];
    $occupation = $_POST['occupation'];
    $paymentMobileNum = $_POST['paymentMobileNum'];
    $paymentAccountNum = $_POST['paymentAccountNum'];

    // Query to insert data into updateinformation table
    $sqlInsert = "INSERT INTO updateinformation (UserID, LeaseStartDate, RentAmount, Occupation, PaymentMobileNumber, PaymentAccountNumber)
                  VALUES ('$userID', '$leaseStartDate', '$monthlyRentAmount', '$occupation', '$paymentMobileNum', '$paymentAccountNum')";

    $resultInsert = mysqli_query($link, $sqlInsert);

    if ($resultInsert) {
        header("Location: update_information.php");
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error updating updateinformation table: ' . mysqli_error($link)]);
    }

    // Close the database connection
    mysqli_close($link);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
