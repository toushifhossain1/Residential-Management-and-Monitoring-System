<!DOCTYPE html>
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
</head>

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
                            class="dropdown-toggle"> <i class="fas fa-database"></i> Store Information</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                                <a href="guard.php"><i
                                class="fas fa-home"></i> Homepage</a>
                            </li>

                            <li>
                                <a href="update_information.php">
                                    <i class="fas fa-user-edit"></i> Update Information
                                </a>
                            </li>
                            <li>
                                <a href="inform_problem.php">
                                    <i class="fas fa-exclamation-triangle"></i> Inform Problem
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
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

            <h3><i class="fas fa-users"></i> Visitor Information</h3>

            <div class="form-container">
                <form id="visitorForm">
                    <div class="form-group">
                        <label for="visitorName" class="form-label">Visitor Name</label>
                        <input type="text" class="form-control" id="visitorName" name="visitorName" required>
                    </div>
                    <div class="form-group">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="nid" class="form-label">NID</label>
                        <input type="text" class="form-control" id="nid" name="nid" required>
                    </div>
                    <div class="form-group">
                        <label for="enterTime" class="form-label">Enter Time</label>
                        <input type="datetime-local" class="form-control" id="enterTime" name="enterTime" required>
                    </div>
                    <div class="form-group">
                        <label for="exitTime" class="form-label">Exit Time</label>
                        <input type="datetime-local" class="form-control" id="exitTime" name="exitTime" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="storeInformation(event)">Store Information</button>
                </form>
            </div>

        </div>

       <script>
        function storeInformation(event) {
  // Prevent the default form submission
  event.preventDefault();

  // Get form values
  const visitorName = document.getElementById("visitorName").value;
  const contactNumber = document.getElementById("contactNumber").value;
  const nid = document.getElementById("nid").value;
  const enterTime = document.getElementById("enterTime").value;
  const exitTime = document.getElementById("exitTime").value;

  // Perform AJAX request or any other logic to store the information

  // Clear the form
  clearForm();
  alert('Visitor information has been stored!');
}

function clearForm() {
  document.getElementById("visitorForm").reset();
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
