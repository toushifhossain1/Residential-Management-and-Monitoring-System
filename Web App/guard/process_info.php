<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $visitorName = $_POST['visitorName'];
    $visitorContactNo = $_POST['contactNumber'];
    $visitorNID = $_POST['nid'];
    $enterTime = $_POST['enterTime'];
    $exitTime = $_POST['exitTime'];
    $UserID = $_POST['UserID'];


    $link = mysqli_connect("localhost", "root", "", "rmms");


    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM visitorinformation WHERE VisitorNID = '$visitorNID' AND ExitTime IS NULL";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $existingID = $row['VisitorInformationSurrogateKey'];
        $sql = "UPDATE visitorinformation SET ExitTime = '$exitTime' WHERE VisitorInformationSurrogateKey = '$existingID'";
        if (mysqli_query($link, $sql)) {
            echo "Exit time updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
    } else {

        if (empty($enterTime)) {

            $enterTime = date('Y-m-d H:i:s');
        }

        $sql = "INSERT INTO visitorinformation (VisitorNID, VisitorName, VisitorContactNo, EnterTime, ExitTime, GuardID) 
                VALUES ('$visitorNID', '$visitorName', '$visitorContactNo', '$enterTime', NULL, '$UserID')";
        if (mysqli_query($link, $sql)) {
            echo "New record created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    }


    mysqli_close($link);
}
?>