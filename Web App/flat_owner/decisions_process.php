<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a valid database connection
    $link = mysqli_connect("localhost", "root", "", "rmms");

    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $userID = $_SESSION['UserID'];
    $decisionTitle = $_POST['decisionTitle'];

    $decisionDescription =  $_POST['decisionDescription'];
    $decisionDate = $_POST['decisionDate'];
  
    // Query to get OwnershipIdentityNumber from flatownerstate table
    $sqlSelect = "SELECT OwnershipIdentityNumber FROM flatownerstate WHERE SOID = $userID";
    $resultSelect = mysqli_query($link, $sqlSelect);

    if ($resultSelect) {
        $rowSelect = mysqli_fetch_assoc($resultSelect);
        $ownershipIdentityNumber = $rowSelect['OwnershipIdentityNumber'];

        // Query to update rules table
        $sqlUpdate = "INSERT INTO rules (OwnershipIdentityNumber, DateOfRuleState, StatedRules)
                      VALUES ('$ownershipIdentityNumber', '$decisionDate', '$decisionDescription')";

        $resultUpdate = mysqli_query($link, $sqlUpdate);
        if ($resultUpdate) {
            header("Location: decisions.php");
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Error updating managerTask table: ' . mysqli_error($link)]);
        }

        
    } else {
        echo json_encode(['success' => false, 'message' => 'Error fetching OwnershipIdentityNumber: ' . mysqli_error($link)]);
    }

    // Close the database connection
    mysqli_close($link);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
