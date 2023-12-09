<?php
session_start();
$UserID = $_SESSION['UserID'];
$link = mysqli_connect("localhost", "root", "", "rmms");
$sql = "SELECT * FROM `manager` where ManagerID = $UserID;";
$results = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($results);
//This code below gives the name of the Rentee
$ManagerName = $row['ManagerName'];
//echo $GuardName;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous"> <!-- Add the Font Awesome library -->
</head>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
        background-color: #ece6ff;

    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: #555;
        /* Text color (grey) */
    }

    h3 {
        color: blue;
        /* Blue color for greeting */

        margin-top: 20px;
        font-weight: 400;
    }

    h1 {
        color: blue;
        /* Blue color for greeting */
    }

    .rules-container,
    .complain-container,
    .servant-work-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        border-radius: 20px;
        background-color: #f8f9fa;
        /* Light gray background */
    }

    .complain-container .card {
        margin-top: 10px;
        background-color: #fff;
        /* White background for cards */
    }

    .servant-work-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        background-color: #f8f9fa;
        /* Light gray background */
        display: flex;
        align-items: center;
        justify-content: center;
        /* Center the content horizontally */
        text-align: center;
        /* Center the text within the container */
    }

    .clock-icon {
        margin-right: 10px;
        font-size: 24px;
        /* Adjust the size of the clock icon */
    }
</style>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="#0" class="logo">RMMS</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                class="fas fa-home"></i> Homepage</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">


                            <li>
                                <a href="assigned_task.php">
                                    <i class="fas fa-tasks"></i> Assigned Task
                                </a>
                            </li>
                            <li>
                                <a href="complain.php">
                                    <i class="fas fa-list-alt"></i> View Complain </a>

                            </li>
                            <li>
                                <a href="update_information.php">
                                    <i class="fas fa-user-edit"></i> Update Information
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="../index.html">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li>
                        <a href="../Form/ServiceForm.html">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                    <li>
                        <a href="../logIn.html">
                            <i class="fas fa-sign-out-alt"></i> Sign out
                        </a>
                    </li>
                </ul>





            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="container">
                <?php
                echo '<h1>' . $ManagerName . '</h1>';
                echo '<h5 style="color: #696969; margin-top:-2%;margin-left: 10px">Manager</h5>';
                ?>


                <h3><i class="fas fa-book"></i> Rules Stated</h3>
                <div class="rules-container">

                    <?php
                    $link = mysqli_connect("localhost", "root", "", "rmms");

                    if ($link === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    $sql = "SELECT `RulesStatedSurrogateKey`, `OwnershipIdentityNumber`, `ManagerID`, `RenteeID`, `GuardID`, `DateOfRuleState`, `StatedRules`, `Feedback` FROM `rules`";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $dateOfRule = $row['DateOfRuleState'];
                            $statedRules = $row['StatedRules'];
                            ?>

                            <div class="card">
                                <div class="card-header">
                                    <b>
                                        <?php echo "New Rules (" . $dateOfRule . "):"; ?>
                                    </b>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?php echo $statedRules; ?>
                                    </p>
                                </div>
                            </div>

                            <?php
                        }
                        mysqli_free_result($result);
                    } else {
                        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
                    }

                    mysqli_close($link);
                    ?>
                </div>
                <!--commitee proposals-->
                <h3><i class="fas fa-file-alt"></i> Commitee Ongoing Proposals</h3>
                <div class="rules-container">

                    <?php
                    $link = mysqli_connect("localhost", "root", "", "rmms");

                    if ($link === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    $sql = "SELECT `RulesStatedSurrogateKey`, `OwnershipIdentityNumber`, `ManagerID`, `RenteeID`, `GuardID`, `DateOfRuleState`, `StatedRules`, `Feedback` FROM `rules`";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $dateOfRule = $row['DateOfRuleState'];
                            $statedRules = $row['StatedRules'];
                            ?>

                            <div class="card">
                                <div class="card-header">
                                    <b>
                                        <?php echo "New Rules (" . $dateOfRule . "):"; ?>
                                    </b>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?php echo $statedRules; ?>
                                    </p>
                                </div>
                            </div>

                            <?php
                        }
                        mysqli_free_result($result);
                    } else {
                        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
                    }

                    mysqli_close($link);
                    ?>
                </div>


                <h3><i class="fas fa-calendar-alt"></i> Technician Work Schedule</h3>
                <div class="servant-work-container">

                    <div>

                        <p><span class="clock-icon"><i class="fas fa-clock"></i></span><b>Start Time:</b> 09:00</p>
                        <p><span class="clock-icon"><i class="fas fa-clock"></i></span><b>End Time:</b> 17:00</p>
                    </div>
                </div>

            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>