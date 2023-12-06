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
    $selectedOption = strval($_POST['dropdown']);
    $password = $_POST['password'];

    $link = mysqli_connect("localhost", "root", "", "rmms");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `flatowner`(`OwnershipIdentityNumber`, `DateOfOwnership`, `FlatOwnerName`, `FlatOwnerGender`, `FlatOwnerPhoneNo`, `FlatOwnerEmail`, `FlatOwnerDOB`, `FlatOwnerNID`, `FlatNo`) VALUES ('$OwnershipIdentityNumber','$DateOfOwnership','$FlatOwnerName','$FlatOwnerGender','$FlatOwnerPhoneNo','$FlatOwnerEmail','$FlatOwnerDOB','$FlatOwnerNID','$FlatNo')";

    if ($selectedOption == 'SelfLiving') {
        $SOID = $_POST['ID'];
        $sql1 = "INSERT INTO `flatownerstate`(`OwnershipIdentityNumber`, `RenterID`, `SOID`) VALUES ('$OwnershipIdentityNumber',NULL,'$SOID')";
        $sql2 = "INSERT INTO `selflivingflatowner`(`SOID`) VALUES ('$SOID')";
        $sql3 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$SOID','SelfLiving','$password')";

        if ((mysqli_query($link, $sql) && mysqli_query($link, $sql1) && mysqli_query($link, $sql2) && mysqli_query($link, $sql3))) {
            echo "SelfLiving added successfully";
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }


    } else {
        $RenterID = $_POST['ID'];
        $sql4 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$RenterID','Renter','$password')";
        $sql5 = "INSERT INTO `flatownerstate`(`OwnershipIdentityNumber`, `RenterID`, `SOID`) VALUES ('$OwnershipIdentityNumber','$RenterID',NULL) ";

        if ((mysqli_query($link, $sql) && mysqli_query($link, $sql4) && mysqli_query($link, $sql5))) {
            echo "Renter added successfully.";
            echo $selectedOption;
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
    }


    /*
        if ((mysqli_query($link, $sql) && mysqli_query($link, $sql4) && mysqli_query($link, $sql5))) {
            echo "Renter added successfully.";
            echo $selectedOption;
        } elseif ((mysqli_query($link, $sql) && mysqli_query($link, $sql1) && mysqli_query($link, $sql2) && mysqli_query($link, $sql3))) {
            echo "SelfLiving added successfully";
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
    */
    mysqli_close($link);
}
?>