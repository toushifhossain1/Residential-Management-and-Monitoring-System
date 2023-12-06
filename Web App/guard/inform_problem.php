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
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    h3 {
        color: blue;
        /* Blue color for greeting */
        text-align: center;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
    }

    .btn-primary:active {
        background-color: #198754 !important;
        border-color: #198754 !important;
    }


    .form-group {
        margin-bottom: 10px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border: 1px solid #ced4da;
        padding: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
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
                                <a href="guard.php">Dashboard</a>
                            </li>
                           
                            <li>
                                <a href="store_info.php">Store Information</a>
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

            <h3><i class="fas fa-exclamation-triangle"></i> Inform Problem</h3>

            <div class="form-container">
                <form action="" method="post" onsubmit="submitForm(event)">
                    <div class="form-group">
                        <label for="name" class="form-label">Name of the Guard</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="problem_type" class="form-label">Problem Type</label>
                        <select class="form-control" id="problem_type" name="problem_type" required>
                            <option value="Security Breach">Security Breach</option>
                            <option value="Medical Emergency">Medical Emergency</option>
                            <option value="Maintenance Issue">Maintenance Issue</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description of the Problem</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="urgent" name="urgent">
                        <label for="urgent" class="form-check-label">Mark as Urgent</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 200px;">Submit</button>
                </form>



            </div>

        </div>


        <script>
            function submitForm(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Clear the form
                clearForm();

                // Show an alert
                alert("Problem information submitted successfully!");
            }

            function clearForm() {
                // Get the form elements and reset their values
                document.getElementById("name").value = "";
                document.getElementById("problem_type").value = "Security Breach"; // Set default value
                document.getElementById("description").value = "";
                document.getElementById("urgent").checked = false;
            }
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