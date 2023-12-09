<?php
$link = mysqli_connect("localhost", "root", "", "rmms");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servantID = $_POST['servantID'];


    $flatNo = $_POST['flatNo'];


    $renteeQuery = "SELECT RenteeID FROM `rentee` WHERE FlatNo = '$flatNo'";
    $renteeResult = mysqli_query($link, $renteeQuery);
    $rowRentee = mysqli_fetch_assoc($renteeResult);
    $renteeID = ($rowRentee) ? $rowRentee['RenteeID'] : null;


    $flatOwnerQuery = "SELECT `OwnershipIdentityNumber` FROM `flatowner` WHERE FlatNo = '$flatNo'";
    $flatOwnerResult = mysqli_query($link, $flatOwnerQuery);
    $rowFlatOwner = mysqli_fetch_assoc($flatOwnerResult);
    $SOID = ($rowFlatOwner) ? $rowFlatOwner['OwnershipIdentityNumber'] : null;


    $selectQuery = "SELECT * FROM `servantwork` WHERE `ServantID` = '$servantID' AND (`RenteeID` = '$renteeID' OR `OwnershipIdentityNumber` = '$SOID')";
    $result = mysqli_query($link, $selectQuery);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $workStartTime = $row['WorkStartTime'];
        $workEndTime = $row['WorkEndTime'];

        if ($workStartTime !== null && $workEndTime !== null) {

            $updateQuery = "UPDATE `servantwork` SET `WorkStartTime` = NOW(), `WorkEndTime` = NULL WHERE `ServantID` = '$servantID' AND (`RenteeID` = '$renteeID' OR `OwnershipIdentityNumber` = '$SOID')";
        } else {

            $updateQuery = "UPDATE `servantwork` SET `WorkEndTime` = NOW() WHERE `ServantID` = '$servantID' AND (`RenteeID` = '$renteeID' OR `OwnershipIdentityNumber` = '$SOID')";
        }

        if (mysqli_query($link, $updateQuery)) {
            echo "Servant work updated successfully for flat: $flatNo";
        } else {
            echo "Error updating servant work: " . mysqli_error($link);
        }
    } else {

        $insertQuery = "INSERT INTO `servantwork` (`ServantID`, `RenteeID`, `OwnershipIdentityNumber`, `WorkStartTime`, `WorkEndTime`)
                        VALUES ('$servantID', '$renteeID', '$SOID', NOW(), NULL)";

        if (mysqli_query($link, $insertQuery)) {
            echo "New entry added to servantwork table for flat: $flatNo";
        } else {
            echo "Error inserting into servantwork table: " . mysqli_error($link);
        }
    }
} else {
    echo "Invalid request!";
}
?>