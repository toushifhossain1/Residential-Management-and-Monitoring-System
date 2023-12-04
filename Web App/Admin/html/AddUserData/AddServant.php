<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ServantID = $_POST["ServantID"];
    $password = $_POST["password"];
    $ServantName = $_POST["ServantName"];
    $ServantAddress = $_POST['ServantAddress'];
    $ServantPhoneNo = $_POST['ServantPhoneNo'];



    $link = mysqli_connect("localhost", "root", "", "rmms");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $sql = "INSERT INTO `servant`(`ServantID`, `ServantName`, `ServantAddress`, `ServantPhoneNo`)
     VALUES ('$ServantID','$ServantName','$ServantAddress','$ServantPhoneNo')";

    $sql2 = "INSERT INTO `user`(`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES ('','$ServantID','Servant','$password')";

    if (mysqli_query($link, $sql) && mysqli_query($link, $sql2)) {
        echo "Servant added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>