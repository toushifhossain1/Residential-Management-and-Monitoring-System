<?php

$FullName = $_POST['FullName'];
$Email = $_POST['Email'];
$PhoneNo = $_POST['PhoneNo'];
$WebAddress = $_POST['WebAddress'];
$Message = $_POST['Message'];

$link = mysqli_connect("localhost", "root", "", "rmms");

if ($link == false) {
    die("Error could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO serviceform (FullName,Email,PhoneNo,WebAddress,Message) VALUES ('$FullName','$Email','$PhoneNo','$WebAddress','$Message')";

if (mysqli_query($link, $sql)) {
    echo ("Record Added successfully.");
} else {
    echo ("Error: Could not able to execute $sql." . mysqli_error($link));
}



mysqli_close($link);




?>