<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $OwnershipIdentityNumber = $_POST['OwnershipIdentityNumber'];
    $DateOfOwnership = $_POST['DateOfOwnership'];
    $DateOfOwnership = date('Y-m-d', strtotime($_POST['DateOfOwnership']));
    $FlatOwnerName = $_POST['FlatOwnerName'];
    $FlatOwnerGender = $_POST['FlatOwnerGender'];
    $FlatOwnerPhoneNo = $_POST['FlatOwnerPhoneNo'];
    $FlatOwnerEmail = $_POST['FlatOwnerEmail'];
    $FlatOwnerDOB = date('Y-m-d', strtotime($_POST['FlatOwnerDOB']));
    $FlatOwnerNID = $_POST['FlatOwnerNID'];
    $FlatNo = $_POST['FlatNo'];
    $selectedOption = $_POST['dropdown'];


    $link = mysqli_connect("localhost", "root", "", "rmms");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    if ($selectedOption == 'SelfLiving') {
        $SOID = $_POST['ID'];
        $sql2 = "INSERT INTO `flatownerstate`(`OwnershipIdentityNumber`, `SELFLIVING`, `RENTER`) VALUES ('$OwnershipIdentityNumber','$SOID',NULL)";
    } else {
        $RenterID = $_POST['ID'];
        $sql2 = "INSERT INTO `flatownerstate`(`OwnershipIdentityNumber`, `SELFLIVING`, `RENTER`) VALUES ('$OwnershipIdentityNumber',NULL,'$RenterID')";
    }



    $sql = "INSERT INTO `flatowner`(`OwnershipIdentityNumber`, `DateOfOwnership`, `FlatOwnerName`, `FlatOwnerGender`, `FlatOwnerPhoneNo`, `FlatOwnerEmail`, `FlatOwnerDOB`, `FlatOwnerNID`, `FlatNo`) VALUES ('$OwnershipIdentityNumber', '$DateOfOwnership', '$FlatOwnerName', '$FlatOwnerGender', '$FlatOwnerPhoneNo', '$FlatOwnerEmail', '$FlatOwnerDOB', '$FlatOwnerNID', '$FlatNo')";

    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Record added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>