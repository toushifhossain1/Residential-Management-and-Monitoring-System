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

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border: 1px solid #ced4da;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #495057;
        outline: none;
    }

    .btn-primary {
        background-color: #198754;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #147444;
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
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i
                                class="fas fa-tasks"></i> Assign Task </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="renter.php"><i class="fas fa-home"></i> Homepage </a>
                            </li>
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
            <h3><i class="fas fa-user-tie"></i> Assign Task To Manager</h3>

            <form id="taskForm" action="#">
                <div class="form-group">
                    <b> <label for="taskDescription">Task Description:</label></b>


                    <textarea class="form-control" id="taskDescription" rows="5"
                        placeholder="Please describe the task in detail."></textarea>
                </div>

                <div class="form-group">
                    <b> <label for="taskLocation">Task Location:</label></b>
                    <input type="text" class="form-control" id="taskLocation"
                        placeholder="Enter the location of the task.">
                </div>

                <div class="form-group">
                    <b> <label for="taskPriority">Task Priority:</label></b>
                    <select class="form-control" id="taskPriority">
                        <option value="Low">Low</option>


                        <option value="Medium">Medium</option>


                        <option value="High">High</option>


                    </select>


                </div>



                <div class="form-group">


                    <b><label for="taskDueDate">Task Due Date:</label></b>
                    <input type="date" class="form-control" id="taskDueDate">
                </div>

                <button type="submit" class="btn btn-primary">Submit Task</button>
            </form>
        </div>
    </div>






    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('taskForm');
            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Clear the form fields
                form.querySelectorAll('input, textarea').forEach(element => element.value = '');

                // Display an alert message
                alert('Your task has been submitted successfully!');
            });
        });
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2mlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>