<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $RenteeID = $_POST["RenteeID"];
    $ComplainMessage = $_POST["complaintDescription"];
    $DateOfComplain = date('Y-m-d', strtotime($_POST["complaintDate"]));

    $link = mysqli_connect("localhost", "root", "", "rmms");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `complain`(`ComplainSurrogateKey`, `RenteeID`, `ComplainMessage`, `DateOfComplain`, `FeedbackOfComplain`) VALUES ('','$RenteeID','$ComplainMessage','$DateOfComplain','')";

    if (mysqli_query($link, $sql)) {
        echo "Complaint added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>