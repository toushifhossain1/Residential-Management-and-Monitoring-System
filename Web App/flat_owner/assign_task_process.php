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
    $taskDescription = mysqli_real_escape_string($link, $_POST['taskDescription']);
    $taskLocation = mysqli_real_escape_string($link, $_POST['taskLocation']);
    $taskPriority = $_POST['taskPriority'];
    $taskDueDate = $_POST['taskDueDate'];

    // Query to get OwnershipIdentityNumber from flatownerstate table
    $sqlSelect = "SELECT OwnershipIdentityNumber FROM flatownerstate WHERE SOID = $userID";
    $resultSelect = mysqli_query($link, $sqlSelect);

    if ($resultSelect) {
        $rowSelect = mysqli_fetch_assoc($resultSelect);
        $ownershipIdentityNumber = $rowSelect['OwnershipIdentityNumber'];

        // Query to get AssignedBy and FlatNo from flatowner table
        $sqlFlatOwner = "SELECT FlatOwnerName, FlatNo FROM flatowner WHERE OwnershipIdentityNumber = '$ownershipIdentityNumber'";
        $resultFlatOwner = mysqli_query($link, $sqlFlatOwner);

        if ($resultFlatOwner) {
            $rowFlatOwner = mysqli_fetch_assoc($resultFlatOwner);
            $assignedBy = $rowFlatOwner['FlatOwnerName'];
            $flatNo = $rowFlatOwner['FlatNo'];
           

            // Query to update managerTask table
            $sqlUpdate = "INSERT INTO managerTask (TaskDescription, TaskLocation, TaskPriority, TaskDueDate, AssignedBy, FlatNo)
                          VALUES ('$taskDescription', '$taskLocation', '$taskPriority', '$taskDueDate', '$assignedBy', '$flatNo')";

            $resultUpdate = mysqli_query($link, $sqlUpdate);

            if ($resultUpdate) {
                header("Location: assign_task.php");
                exit();
            } else {
                echo json_encode(['success' => false, 'message' => 'Error updating managerTask table: ' . mysqli_error($link)]);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Error fetching AssignedBy and FlatNo: ' . mysqli_error($link)]);
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
