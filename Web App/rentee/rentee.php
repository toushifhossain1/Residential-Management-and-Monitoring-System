<?php
session_start();
$UserID = $_SESSION['UserID'];
$link = mysqli_connect("localhost", "root", "", "rmms");
$sql = "SELECT * FROM `rentee` where RenteeID = $UserID;";
$results = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($results);
//This code below gives the name of the Rentee
$RenteeName = $row['RenteeName'];
//echo $RenteeName;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Rentee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous">
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
    }

    h3 {
        color: blue;


        margin-top: 10px;
        font-weight: 400;
    }

    h1 {
        color: blue;
    }

    .rules-container,
    .complain-container,
    .servant-work-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        border-radius: 20px;
        background-color: #f8f9fa;
    }

    .complain-container .card {
        margin-top: 10px;
        background-color: #fff;
    }

    .servant-work-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .clock-icon {
        margin-right: 10px;
        font-size: 24px;
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
                                <a href="rentee_make_payment.php">
                                    <i class="fas fa-money-bill-wave"></i> Make Payment
                                </a>
                            </li>
                            <li>
                                <a href="submit_complain.php">
                                    <i class="fas fa-exclamation-circle"></i> Submit Complain
                                </a>
                            </li>
                            <li>
                                <a href="update_information.php">
                                    <i class="fas fa-user-edit"></i> Update Information
                                </a>
                            </li>
                            <li>
                                <a href="inform_manager.php">
                                    <i class="fas fa-info-circle"></i> Inform Manager
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
                echo '<h1>Hi, ' . $RenteeName . '</h1>';
                echo '<h5 style="color: #696969; margin-top:-2%;margin-left: 10px">Rentee</h5>';
                ?>


                <h3><i class="fas fa-book"></i> Rules</h3>
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
                <h3><i class="fas fa-exclamation-circle"></i> Complain</h3>

                <div class="complain-container">

                    <?php
                    $link = mysqli_connect("localhost", "root", "", "rmms");

                    if ($link === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    $sql = "SELECT `ComplainSurrogateKey`, `RenteeID`, `ComplainMessage`, `DateOfComplain`, `FeedbackOfComplain` FROM `complain`";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $dateOfComplaint = $row['DateOfComplain'];
                            $complaint = $row['ComplainMessage'];
                            $feedback = $row['FeedbackOfComplain'];
                            ?>

                            <div class="card">
                                <div class="card-header">
                                    <b>
                                        <?php echo $dateOfComplaint; ?>
                                    </b>
                                </div>
                                <div class="card-body">
                                    <p><b>Complaint:</b>
                                        <?php echo $complaint; ?>
                                    </p>
                                    <p><b>Feedback:</b>
                                        <?php echo $feedback; ?>
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
                <h3><i class="fas fa-calendar-alt"></i> Servant Work Schedule</h3>
                <div class="servant-work-container">

                    <div>


                        <p><span class="clock-icon"><i class="fas fa-clock"></i></span>
                            <b>Start Time:</b>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "rmms");
                            $sql = "SELECT `ServantWorkID`, `ServantID`, `RenteeID`, `OwnershipIdentityNumber`, `WorkStartTime`, `WorkEndTime` FROM `servantwork` WHERE RenteeID = '$UserID';";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['WorkStartTime'];
                            ?>
                        </p>
                        <p><span class="clock-icon"><i class="fas fa-clock"></i></span>
                            <b>End Time:</b>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "rmms");
                            $sql = "SELECT `ServantWorkID`, `ServantID`, `RenteeID`, `OwnershipIdentityNumber`, `WorkStartTime`, `WorkEndTime` FROM `servantwork` WHERE RenteeID = '$UserID';";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['WorkEndTime'];
                            ?>
                        </p>




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