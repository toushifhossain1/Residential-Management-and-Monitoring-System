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
                            class="dropdown-toggle"> <i class="fas fa-user-edit"></i> Update Information</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                                <a href="guard.php"><i
                                class="fas fa-home"></i> Homepage</a>
                            </li>

                           
                            <li>
                                <a href="inform_problem.php">
                                    <i class="fas fa-exclamation-triangle"></i> Inform Problem
                                </a>
                            </li>
                            <li>
                                <a href="store_info.php">
                                    <i class="fas fa-database"></i> Store Information
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
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i> Sign out
                        </a>
                    </li>
                </ul>





            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
           
                <h3><i class="fas fa-envelope"></i> Request for Update Information</h3>

                <form id="updateForm">
                    <div class="form-group">
                        <b><label for="phoneNum">Phone Number:</label></b>
                        <input type="tel" class="form-control" id="phoneNum" placeholder="Enter your phone number">


                    </div>



                    <div class="form-group">


                       <b> <label for="adress">Address:</label></b>


                        <input type="address" class="form-control" id="address" placeholder="Enter your  address">


                    </div>



                    <div class="form-group">


                       <b> <label for="dob">Date of Birth:</label></b>


                        <input type="date" class="form-control" id="dob">


                    </div>





                    <button type="submit" class="btn btn-primary">Submit Update Request</button>


                </form>


          



        </div>
        <script>
      document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('updateForm').addEventListener('submit', function (event) {
            event.preventDefault();

            clearForm();
            alert('Request has been sent!');
            
        });

        function clearForm() {
            document.getElementById('phoneNum').value = '';
            document.getElementById('email').value = '';
            document.getElementById('dob').value = '';
            document.getElementById('occupation').value = '';
            document.getElementById('paymentMobileNum').value = '';
            document.getElementById('paymentAccountNum').value = '';
        }
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