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
    outline: none; /* Remove the outline on click */
}
.payment-options .btn-primary:hover
{
    background-color: #d9d9d9 !important;
    /* Add background color on hover and active (click) */
}
.payment-options .btn-primary:active,
.payment-options .btn-primary:focus 
{
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
                                <a href="#">Make Payment</a>
                            </li>
                            <li>
                                <a href="#">Submit Complain</a>
                            </li>
                            <li>
                                <a href="#">Update Information</a>
                            </li>
                            <li>
                                <a href="#">Inform Manager</a>
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

            <div class="container">
                <div class="user-selection">
                    <h3>Select User Type</h3>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="user-card">
                                <img src="images/user.png" alt="User Icon" style="width: 70px;">
                                <p>User Name 1</p>
                                <label for="renter">
                                    <input type="radio" name="userType" id="renter"> Renter
                                </label>
                            </div>
                        </div>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>