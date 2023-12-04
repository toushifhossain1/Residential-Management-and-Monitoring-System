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
    background-color: #d9d9d9; /* Change the background color on hover and click */
    color: black; /* Change the text color on hover and click */
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
                                <a href="#">Update Information</a>
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
                <h1>Hi, User!</h1>



                <h3><i class="fas fa-book"></i> Rules Stated</h3>
    <div class="rules-container">
	
        <p><b>New Rules (2023-12-01):</b></p>
        <p>Please keep your room clean and tidy.</p>
    </div>
	<!--commitee proposals-->
    



                <!-- payment receive table -->


                <h3><i class="fas fa-person"></i> Visitor's Information</h3>

                <div class="container">
                    <div class="servant-work-container table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Flat Number</th>
                                    <th scope="col">Visitor Name</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Enter Time</th>
                                    <th scope="col">Exit Time</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Flat 101</td>
                                    <td>Nijhum</td>
                                    <td>123</td>
                                    <td>2.30pm</td>
                                    <td>5pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                
                    <button onclick="storeInformation()">Store Information</button>
                    <button onclick="informProblem()">Inform Problem</button>
                
                
            </div>



            <script>
        
        function storeInformation() {
            // Implement logic to handle the payment submission
        }
        function informProblem() {
            // Implement logic to handle the payment submission
        }
    </script>
            <script src="path/to/bootstrap.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

</body>

</html>