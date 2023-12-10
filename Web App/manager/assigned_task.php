<!doctype html>
<html lang="en">

<head>
    <title>Assign Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous">
</head>
<style>
    h3 {
        color: blue;
        /* Blue color for greeting */
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    th {
        text-align: left;
        background-color: #f1f1f1;
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
                                class="fas fa-tasks"></i> Assigned Task </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="manager.php"><i class="fas fa-home"></i> Homepage</a>
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
            <h3><i class="fas fa-tasks"></i> Assigned Tasks</h3>
            <hr>

            <table id="tasksTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Priority</th>
                        <th>Due Date</th>
                        <th>Assigned By</th>
                        <th>Flat No</th>
                    </tr>
                </thead>


                <tbody>

                    <?php
                    $link = mysqli_connect("localhost", "root", "", "rmms");

                    if ($link === false) {
                        die("Error: Could not connect." . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM managertask";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['TaskDescription'] . "</td>";
                            echo "<td>" . $row['TaskLocation'] . "</td>";
                            echo "<td>" . $row['TaskPriority'] . "</td>";
                            echo "<td>" . $row['TaskDueDate'] . "</td>";
                            echo "<td>" . $row['AssignedBy'] . "</td>";
                            echo "<td>" . $row['FlatNo'] . "</td>";
                            echo "</tr>";
                        }
                        mysqli_free_result($result); // Free result set
                    } else {
                        echo "Error: Could not execute $sql." . mysqli_error($link);
                    }

                    mysqli_close($link);
                    ?>
                </tbody>


            </table>







        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2mlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</body>

</html>