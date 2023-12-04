<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $RenteeID = $_POST['RenteeID'];
    $Password = $_POST['Password'];
    $RenteeName = $_POST['RenteeName'];
    $RenteeGender = $_POST['RenteeGender'];
    $RenteePhoneNo = $_POST['RenteePhoneNo'];
    $RenteeEmail = $_POST['RenteeEmail'];
    $RenteeDOB = $_POST['RenteeDOB'];
    $RenteeNID = $_POST['RenteeNID'];
    $RenteeOccupation = $_POST['RenteeOccupation'];
    $PaymentMobileNo = $_POST['PaymentMobileNo'];
    $PaymentBankAccountNo = $_POST['PaymentBankAccountNo'];
    $FlatNo = $_POST['FlatNo'];
    $formattedDOB = date('Y-m-d', strtotime($_POST['RenteeDOB']));

    $link = mysqli_connect("localhost", "root", "", "rmms");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO rentee (RenteeID, RenteeName, RenteeGender, RenteePhoneNo, RenteeEmail, RenteeDOB, RenteeNID, RenteeOccupation, PaymentMobileNo, PaymentBankAccountNo, FlatNo) 
            VALUES ('$RenteeID', '$RenteeName', '$RenteeGender', '$RenteePhoneNo', '$RenteeEmail', '$formattedDOB', '$RenteeNID', '$RenteeOccupation', '$PaymentMobileNo', '$PaymentBankAccountNo', '$FlatNo')";
    $sql2 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$RenteeID','Rentee','$Password')";
    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Record added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>