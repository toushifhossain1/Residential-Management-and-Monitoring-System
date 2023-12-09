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
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $occupation = $_POST['occupation'];
    $paymentMobileNum = $_POST['paymentMobileNum'];
    $paymentAccountNum = $_POST['paymentAccountNum'];

    // Print the received data for debugging
    echo "UserID: $userID<br>";
    echo "Phone Number: $phoneNum<br>";
    echo "Email: $email<br>";
    echo "DOB: $dob<br>";
    echo "Occupation: $occupation<br>";
    echo "Payment Mobile Number: $paymentMobileNum<br>";
    echo "Payment Account Number: $paymentAccountNum<br>";

    // Query to insert data into updateinformation table
    $sqlInsert = "INSERT INTO updateinformation (UserID, PhoneNumber, Email, DOB, Occupation, PaymentMobileNumber, PaymentAccountNumber)
                  VALUES ('$userID', '$phoneNum', '$email', '$dob', '$occupation', '$paymentMobileNum', '$paymentAccountNum')";

    $resultInsert = mysqli_query($link, $sqlInsert);

    if ($resultInsert) {
        header("Location: update_information.php");
        exit();
    } else {
        echo "Error inserting into database: " . mysqli_error($link);
    }

    // Close the database connection
    mysqli_close($link);
} else {
    echo "Invalid request method.";
}
?>
