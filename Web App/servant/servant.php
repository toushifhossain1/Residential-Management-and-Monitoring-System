<?php
session_start();
$UserID = $_SESSION['UserID'];
$link = mysqli_connect("localhost", "root", "", "rmms");
$sql = "SELECT * FROM `servant` where ServantID = $UserID;";
$results = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($results);
//This code below gives the name of the Rentee
$ServantName = $row['ServantName'];
//echo $ServantName;

?>




<!doctype html>
<html lang="en">

<head>
    <title>Servant</title>
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

        margin-top: 30px;
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

    button {
        background-color: #bfbfbf;
        color: black;
        border-radius: 20px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin: 0 auto;
        display: block;
        height: 50px;
        width: 35%;
        margin-top: 20px;
    }

    button:hover,
    button:active {
        background-color: #d9d9d9;
        /* Change the background color on hover and click */
        color: black;
        /* Change the text color on hover and click */
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
                                class="fas fa-home"></i>Homepage</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">

                            <li>
                                <a href="update_information.php."><i class="fas fa-user-edit"></i> Update
                                    Information</a>
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
                echo '<h1>' . $ServantName . '</h1>';
                echo '<h5 style="color: #696969; margin-top:-2%;margin-left: 10px">Servant</h5>';
                ?>



                <h3><i class=" fas fa-clock"></i> Upcoming Work Schedule</h3>

                <div class="container">
                    <div class="servant-work-container table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Flat Number</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-12-01</td>
                                    <td>Flat 101</td>
                                    <td>2.30PM</td>
                                </tr>
                                <tr>
                                    <td>2023-12-01</td>
                                    <td>Flat 101</td>
                                    <td>2.30PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



                <!-- payment receive table -->


                <h3><i class="fas fa-dollar-sign"></i> Payment received</h3>

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
                <br>




                <!-- Select box for Flat No and Button -->
                <b><label for="Flat">Flat No:</label></b>
                <select class="form-control" id="Flat" name="Flat">
                    <!-- Options loaded dynamically using PHP -->
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "rmms");
                    $sql = "SELECT * FROM `flat`";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['FlatNo'] . "'>" . $row['FlatNo'] . "</option>";
                        }
                    } else {
                        echo "Error: Could not execute $sql." . mysqli_error($link);
                    }
                    ?>
                </select>

                <!-- Button to toggle Start/End Time -->
                <button id="timeButton" onclick="toggleTime()">Start Time</button>

                <script>
                    let isStartTime = true;

                    function toggleTime() {
                        const flatNo = document.getElementById("Flat").value;
                        const buttonText = document.getElementById("timeButton");
                        const servantID = "<?php echo $UserID; ?>"; // Getting ServantID from PHP

                        if (isStartTime) {
                            // AJAX request to store start time
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState === 4 && this.status === 200) {
                                    console.log(this.responseText); // Log response from server
                                    buttonText.textContent = "End Time";
                                    isStartTime = false;
                                }
                            };
                            xhttp.open("POST", "update_servantwork.php", true); // Replace with your PHP file handling start time
                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhttp.send("flatNo=" + flatNo + "&servantID=" + servantID); // Include ServantID in the request
                        } else {
                            // AJAX request to store end time
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState === 4 && this.status === 200) {
                                    console.log(this.responseText); // Log response from server
                                    buttonText.textContent = "Start Time";
                                    isStartTime = true;
                                }
                            };
                            xhttp.open("POST", "update_servantwork.php", true); // Replace with your PHP file handling end time
                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhttp.send("flatNo=" + flatNo + "&servantID=" + servantID); // Include ServantID in the request
                        }
                    }
                </script>





                <script src="path/to/bootstrap.js"></script>
                <script src="js/jquery.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>

</body>

</html>