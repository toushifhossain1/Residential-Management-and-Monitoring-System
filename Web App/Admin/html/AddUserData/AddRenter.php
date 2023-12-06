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
    $sql2 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$RenterID','Renter','$Password')";
    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Renter added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>