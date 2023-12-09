<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $link = mysqli_connect("localhost", "root", "", "rmms");

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userID = $_SESSION['UserID'];
    $complaintDescription = mysqli_real_escape_string($link, $_POST['complaintDescription']);
    $complaintLocation = mysqli_real_escape_string($link, $_POST['complaintLocation']);
    $complaintDate = $_POST['complaintDate'];

    // Insert form data into the database
    $sqlInsert = "INSERT INTO renteeinformmanager (RenteeID, ComplainMessage, DateOfComplain, LocationOfIncident)
                  VALUES ('$userID', '$complaintDescription', '$complaintDate', '$complaintLocation')";

    if (mysqli_query($link, $sqlInsert)) {
        header("Location: rentee_dashboard.php");
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error inserting complaint: ' . mysqli_error($link)]);
    }

    mysqli_close($link);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>