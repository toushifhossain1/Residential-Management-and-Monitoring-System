<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $GuardID = $_POST["GuardID"];
    $password = $_POST["password"];
    $GuardName = $_POST["GuardName"];
    $selectedOption = strval($_POST['dropdown']);
    if ($selectedOption == 'Day') {
        $ShiftDay = 1;
    } else {
        $ShiftDay = 0;
    }
    $GuardAddress = $_POST['GuardAddress'];
    $GuardNID = $_POST['GuardNID'];



    $link = mysqli_connect("localhost", "root", "", "rmms");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $sql = "INSERT INTO `guard`(`GuardID`, `GuardName`, `ShiftDay`, `GuardAddress`, `GuardNID`, `HouseCertificationNo`) 
    VALUES ('$GuardID','$GuardName','$ShiftDay','$GuardAddress','$GuardNID','DHK1217SB478')";

    $sql2 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$GuardID','Guard','$password')";

    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Guard added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>