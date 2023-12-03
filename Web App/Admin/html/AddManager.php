<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ManagerID = $_POST["ManagerID"];
    $password = $_POST["password"];
    // $HouseCertificationNo = 
    $ManagerName = $_POST["ManagerName"];
    $ManagerPhoneNo = $_POST["ManagerPhoneNo"];
    $ManagerAddress = $_POST["ManagerAddress"];
    $ManagerNID = $_POST["ManagerNID"];
    $ManagerDOB = date('Y-m-d', strtotime($_POST['ManagerDOB']));
    $ManagerSalary = $_POST['ManagerSalary'];

    $link = mysqli_connect("localhost", "root", "", "rmms");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `manager`(`ManagerID`, `HouseCertificationNo`, `ManagerName`, `ManagerPhoneNo`, `ManagerAddress`, `ManagerNID`, `ManagerDOB`, `ManagerSalary`) 
    VALUES ('$ManagerID','DHK1217SB478','$ManagerName',' $ManagerPhoneNo','$ManagerAddress','$ManagerNID','$ManagerDOB','$ManagerSalary')";

    $sql2 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$ManagerID','Manager','$password')";
    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Manager added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>