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

    // Add debugging: log variables
    error_log("UserID: $userID");
    error_log("Complaint Description: $complaintDescription");
    error_log("Complaint Location: $complaintLocation");
    error_log("Complaint Date: $complaintDate");

    $sqlSelect = "SELECT RenteeID FROM rentee WHERE UserID = $userID";
    $resultSelect = mysqli_query($link, $sqlSelect);

    if ($resultSelect) {
        $rowSelect = mysqli_fetch_assoc($resultSelect);
        $renteeID = $rowSelect['RenteeID'];

        // Add debugging: log selected RenteeID
        error_log("RenteeID: $renteeID");

        $sqlInsert = "INSERT INTO renteeinformmanager (RenteeID, ComplainMessage, DateOfComplain, LocationOfIncident)
                      VALUES ('$renteeID', '$complaintDescription', '$complaintDate', '$complaintLocation')";

        // Add debugging: log the SQL query
        error_log("SQL Query: $sqlInsert");

        $resultInsert = mysqli_query($link, $sqlInsert);

        if ($resultInsert) {
            header("Location: rentee_dashboard.php");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Error inserting complaint: ' . mysqli_error($link)]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Error fetching RenteeID: ' . mysqli_error($link)]);
    }

    mysqli_close($link);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>