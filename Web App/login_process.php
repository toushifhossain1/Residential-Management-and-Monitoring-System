<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $UserID = $_POST['UserID'];
    $Occupation = $_POST['Occupation'];
    $Password = $_POST['Password'];



    $link = mysqli_connect("localhost", "root", "", "rmms");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //from HTML
    //echo "UserID: " . $UserID . "<br>";
    //echo "Password: " . $Password . "<br>";
    //echo "Occupation: " . $Occupation . "<br>";

    $sql = "SELECT * FROM `user`;";
    $results = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($results);
    //Since there is only one row in the database, therefore  only one row is fetched, for multiple rows run whileloop
//while($row = mysqli_fetch_assoc($results);) {
    // $row['attributeName'] will run through the whole tabvle
//            }


    //From Database
    //echo '<br>';
    //echo $row['UserID'] . "<br>";
    //echo $row['Occupation'] . "<br>";
    //echo $row['Password'] . "<br>";


    if ($UserID == $row['UserID'] && $Occupation == $row['Occupation'] && $Password == $row['Password']) {
        session_start();
        $_SESSION['UserID'] = $UserID; // Set UserID in session -> this goes to the next page
        //For Rentee
        header("Location: rentee/rentee.php");
    } else {
        echo 'User id didnot match';
    }


    mysqli_close($link);


}
?>