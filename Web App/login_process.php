<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserID = $_POST['UserID'];
    $Password = $_POST['Password'];

    $link = mysqli_connect("localhost", "root", "", "rmms");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `user` WHERE UserID = '$UserID' AND Password = '$Password';";
    $results = mysqli_query($link, $sql);

    if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_assoc($results);
        session_start();
        $_SESSION['UserID'] = $UserID;

        switch ($row['Occupation']) {
            case 'SelfLiving':
                header("Location: flat_owner/flat_owner.php");
                break;
            case 'Renter':
                header("Location: renter/renter.php");
                break;
            case 'Rentee':
                header("Location: rentee/rentee.php");
                break;
            case 'Manager':
                header("Location: manager/manager.php");
                break;
            case 'Guard':
                header("Location: guard/guard.php");
                break;
            case 'Servant':
                header("Location: servant/servant.php");
                break;
            default:
                echo "Invalid Occupation";
        }
    } else {
        echo 'Invalid UserID or Password';
    }

    mysqli_free_result($results);
    mysqli_close($link);
}
?>