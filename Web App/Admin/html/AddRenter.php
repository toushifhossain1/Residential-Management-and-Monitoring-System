<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $RenterID = $_POST["RenterID"];
    $LeaseStartDate = date('Y-m-d', strtotime($_POST["LeaseStartDate"]));
    $PaymentMobileNo = $_POST["PaymentMobileNo"];
    $MonthlyRentAmount = $_POST["MonthlyRentAmount"];
    $PaymentBankAccountNo = $_POST["PaymentBankAccountNo"];

    $link = mysqli_connect("localhost", "root", "", "rmms");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `renter`(`RenterID`, `LeaseStartDate`, `PaymentMobileNo`, `MonthlyRentAmount`, `PaymentBankAccountNo`) VALUES ('$RenterID','$LeaseStartDate','$PaymentMobileNo',' $MonthlyRentAmount','$PaymentBankAccountNo')";
    if (mysqli_query($link, $sql)) {
        echo "Record added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>