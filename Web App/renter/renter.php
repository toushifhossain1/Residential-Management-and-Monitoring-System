<?php
session_start();
$UserID = $_SESSION['UserID'];
$link = mysqli_connect("localhost", "root", "", "rmms");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT fo.FlatOwnerName
        FROM flatownerstate AS fos
        JOIN flatowner AS fo ON fos.OwnershipIdentityNumber = fo.OwnershipIdentityNumber
        WHERE fos.RenterID = $UserID";

$results = mysqli_query($link, $sql);

if ($results) {
    $row = mysqli_fetch_assoc($results);

    // This code below gives the name of the Flat Owner
    $RenterName = $row['FlatOwnerName'];

} else {
    echo "Error: " . mysqli_error($link);
}
//echo $RenterName;
$sqlFetchProposal = "SELECT DateOfRuleState, StatedRules FROM rules ORDER BY DateOfRuleState DESC LIMIT 1";
$resultFetchProposal = mysqli_query($link, $sqlFetchProposal);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 02</title>
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

    @media (max-width: 767px) {
        .table-responsive {
            overflow-x: auto;
        }

        .table-bordered {
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            white-space: nowrap;
        }
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
        */
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
                                <a href="decisions.php">
                                    <i class="fas fa-lightbulb"></i> Propose Decisions
                                </a>
                            </li>
                            <li>
                                <a href="update_information.php">
                                    <i class="fas fa-user-edit"></i> Update Information
                                </a>
                            </li>
                            <li>
                                <a href="assign_task.php">
                                    <i class="fas fa-tasks"></i> Assign Task To Manager
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
                echo '<h1>Hi, ' . $RenterName . ' !</h1>';
                
                ?>

                <h3><i class="fas fa-file-alt"></i> Commitee Proposals</h3>
                <div class="rules-container">

                    <p><b>New Proposals(2023-12-01):</b></p>
                    <p>Please keep your room clean and tidy.</p>
                </div>

                <?php
               
                
               if ($resultFetchProposal) {
                   $rowProposal = mysqli_fetch_assoc($resultFetchProposal);
   
                   // Display the fetched committee proposal in the HTML structure
                   echo '<div class="rules-container">';
                   echo '<p><b>New Proposals(' . $rowProposal['DateOfRuleState'] . '):</b></p>';
                   echo '<p>' . $rowProposal['StatedRules'] . '</p>';
                   echo '</div>';
               } else {
                   echo "Error fetching committee proposal from database: " . mysqli_error($link);
               }
               ?>
            


                <!-- Ongoing Meeting Section with a Users Icon -->
                <h3><i class="fas fa-users"></i> Tap to Join</h3>

                <!-- resused previous code hence weird class names :p !> -->
                <div class="complain-container">
                    <!-- Card with Timer and Meeting Link -->
                    <div class="card">
                        <div class="row  mt-2 mb-2 ">
                            <div class="col-md-4 d-flex align-items-center">
                                <p class="mb-0"><strong class="text-center"> &nbsp; &nbsp; Ongoing meeting
                                        (1hr:2m:2s)</strong></p>
                            </div>
                            <div class="col-md-8">
                                <a href="https://meet.google.com/jce-nkmk-pdc" class="btn btn-primary">Join Meeting <i
                                        class="fas fa-video"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




               




                <!-- rent receive table -->


                <h3><i class="fas fa-money-check"></i> Rent received</h3>

                <div class="container">
                    <div class="servant-work-container table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Flat Number</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-12-01</td>
                                    <td>Flat 101</td>
                                    <td>$1000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <script src="path/to/bootstrap.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

</body>

</html>