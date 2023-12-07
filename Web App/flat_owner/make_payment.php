<!doctype html>
<html lang="en">

<head>
    <title>Payment</title>
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

    h3 {
        color: blue;
        /* Blue color for greeting */
        text-align: center;
    }

    .user-selection {
        margin-left: 10px;
        /* Adjust the left margin as needed */
        margin-right: 10px;
        /* Adjust the right margin as needed */
        text-align: center;

    }

    .payment-options .btn-primary {
        background-color: transparent;
        border: none;
        width: 100%;
        height: 70px;
        outline: none;
        /* Remove the outline on click */
    }

    .payment-options .btn-primary:hover {
        background-color: #d9d9d9 !important;
        /* Add background color on hover and active (click) */
    }

    .payment-options .btn-primary:active,
    .payment-options .btn-primary:focus {
        background-color: #d9d9d9 !important;
    }



    #paymentAmount,
    #paymentReason {
        font-weight: bold;
        color: ;
    }

    .payment-details label {
        font-weight: bold;
    }

    .payment-details button {
        background-color: #b3b3b3;
        color: black;
        border-radius: 20px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin: 0 auto;
        display: block;
        height: 50px;
        width: 35%;
    }

    .payment-details button:hover,
    .payment-details button:active {
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
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i
                                class="fas fa-money-bill-wave"></i> Make Payment
                        </a>
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
                <div class="user-selection">
                    <h3>Select User Type</h3>
                    <div class="row mt-3">

                        <div class="col-md-4">
                            <div class="user-card">
                                <img src="images/user.png" alt="User Icon" style="width: 70px;">
                                <p>User Name 2</p>
                                <label for="technician">
                                    <input type="radio" name="userType" id="technician"> Technician
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="user-card">
                                <img src="images/user.png" alt="User Icon" style="width: 70px;">
                                <p>User Name 3</p>
                                <label for="servant">
                                    <input type="radio" name="userType" id="servant"> Servant
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-options mt-4">
                    <h3>Select Payment Option</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-block" id="visaButton">
                                        <img src="images/visa.png" alt="Visa logo" class="img-fluid"
                                            style="width: 70px;">
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-block" id="bKashButton">
                                        <img src="images/bkash.png" alt="bKash logo" class="img-fluid"
                                            style="width: 40px;">
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-block" id="nagadButton">
                                        <img src="images/nagad.png" alt="Nagad logo" class="img-fluid"
                                            style="width: 90px;">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="payment-details mt-5">
                    <h3>Payment Details</h3>
                    <div class="form-group">
                        <label for="paymentAmount">Amount:</label>
                        <input type="number" class="form-control" id="paymentAmount" placeholder="Enter amount">
                    </div>
                    <div class="form-group">
                        <label for="paymentReason">Reason:</label>
                        <textarea class="form-control" id="paymentReason" placeholder="Enter your reason"></textarea>
                    </div>
                    <button onclick="submitPayment()">Make Payment</button>
                </div>
            </div>

        </div>
    </div>
    <script>
        function increaseAmount() {
            // Implement logic to increase the amount
            // For example: document.getElementById('amount').value++;
        }

        function decreaseAmount() {
            // Implement logic to decrease the amount
            // For example: document.getElementById('amount').value--;
        }

        function submitPayment() {
            // Implement logic to handle the payment submission
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>