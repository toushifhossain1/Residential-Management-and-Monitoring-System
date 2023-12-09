<!doctype html>
<html lang="en">

<head>
    <title>Update Information</title>
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
                <h1><a href="#0" class="logo">RMMS</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                class="fas fa-user-edit"></i> Update Information</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="flat_owner.php"><i class="fas fa-home"></i> Homepage</a>
                            </li>

                            <li>
                                <a href="decisions.php">
                                    <i class="fas fa-lightbulb"></i> Propose Decisions
                                </a>
                            </li>
                            <li>
                                <a href="make_payment.php">
                                    <i class="fas fa-money-bill-wave"></i> Make Payment
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

            <h3><i class="fas fa-envelope"></i> Request for Update Information</h3>

            <form id="updateForm" action="update_information_process.php" method="POST">
                <div class="form-group">
                    <b><label for="phoneNum">Phone Number:</label></b>
                    <input type="tel" class="form-control" id="phoneNum"name="phoneNum" placeholder="Enter your phone number">


                </div>



                <div class="form-group">


                    <b> <label for="email">Email Address:</label></b>


                    <input type="email" class="form-control" id="email"name="email" placeholder="Enter your email address">


                </div>



                <div class="form-group">


                    <b> <label for="dob">Date of Birth:</label></b>


                    <input type="date" class="form-control" id="dob" name="dob">


                </div>



                <div class="form-group">


                    <b> <label for="occupation">Occupation:</label></b>


                    <input type="text" class="form-control" id="occupation"name="occupation" placeholder="Enter your occupation">
                </div>

                <div class="form-group">
                    <b> <label for="paymentMobileNum">Payment Mobile Number:</label></b>
                    <input type="tel" class="form-control" id="paymentMobileNum" name="paymentMobileNum"
                        placeholder="Enter your payment mobile number">
                </div>

                <div class="form-group">
                    <b> <label for="paymentBankInfo">Payment Account Number:</label></b>

                    <input type="tel" class="form-control" id="paymentAccountNum"name="paymentAccountNum"
                        placeholder="Enter your payment Account number">
                </div>

                <button type="submit" class="btn btn-primary">Submit Update Request</button>


            </form>






        </div>
        

        <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</html>