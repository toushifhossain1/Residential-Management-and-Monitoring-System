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
                <h1><a href="index.html" class="logo">RMMS</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                    <a href="manager.php">Dashboard</a>
                </li>
              
                <li>
                    <a href="complain.php">Rentee's Complain</a>
                </li>
                <li>
                    <a href="update_information.php">Update Information</a>
                </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">
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
                        <th>Assigned by</th>
                        <th>Flat Number</th>
                        <th>Task Description</th>
                        <th>Location</th>
                        <th>Priority</th>
                        <th>Due Date</th>



                    </tr>

                    <tr>
                        <td>Replace light bulb in hallway</td>
                        <td>Apartment 303</td>
                        <td>Low</td>
                        <td>2023-12-25</td>
                        <td>Jane Doe</td>
                        <td>303</td>
                    </tr>
                    <tr>
                        <td>Clean gutters and downspouts</td>
                        <td>Building exterior</td>
                        <td>Medium</td>
                        <td>2024-01-05</td>
                        <td>John Doe</td>
                        <td>All residents</td>
                    </tr>
                    <tr>
                        <td>Organize resident meeting</td>
                        <td>Community room</td>
                        <td>High</td>
                        <td>2024-01-10</td>
                        <td>Manager</td>
                        <td>All residents</td>
                    </tr>
                    <tr>
                        <td>Fix loose railing on stairs</td>
                        <td>Stairwell</td>
                        <td>High</td>
                        <td>2023-12-20</td>
                        <td>John Doe</td>
                        <td>All residents</td>
                    </tr>
                    <tr>
                        <td>Remove snow and ice from walkways</td>
                        <td>Building exterior</td>
                        <td>High</td>
                        <td>Upon snowfall</td>
                        <td>Manager</td>
                        <td>All residents</td>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>



                    </tr>



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