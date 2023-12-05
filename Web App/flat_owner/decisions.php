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
                                <a href="flat_owner.php">Dashboard</a>
                            </li>
                        
                            <li>
                                <a href="make_payment.php">Make Payment</a>
                            </li>
                            <li>
                                <a href="update_information.php">Update Information</a>
                            </li>
                            <li>
                                <a href="assign_task.php">Assign Task To Manager</a>
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
        <h3><i class="fas fa-gavel"></i> Propose Decision</h3>

<form id="decisionForm" action="#">
  <div class="form-group">
   <b> <label for="decisionTitle">Decision Title:</label></b>
    <input type="text" class="form-control" id="decisionTitle" placeholder="Enter a brief title for the decision.">
  </div>

  <div class="form-group">
    <b><label for="decisionDescription">Decision Description:</label></b>
    <textarea class="form-control" id="decisionDescription" rows="5" placeholder="Please describe the decision proposal in detail."></textarea>
  </div>

  <div class="form-group">
    <b><label for="decisionBenefits">Decision Benefits:</label></b>
    <textarea class="form-control" id="decisionBenefits" rows="3" placeholder="List the potential benefits of the proposed decision."></textarea>
  </div>

  <div class="form-group">
    <b><label for="decisionDrawbacks">Decision Drawbacks:</label></b>
    <textarea class="form-control" id="decisionDrawbacks" rows="3" placeholder="List any potential drawbacks or risks associated with the proposed decision."></textarea>
  </div>
  <div class="form-group">
  <b><label for="decisionDate">Decision Proposal Date:</label><b>
  <input type="date" class="form-control" id="decisionDate">
</div>


  <button type="submit" class="btn btn-primary">Submit Decision Proposal</button>
</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2mlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
const form = document.getElementById('decisionForm');
form.addEventListener('submit', function(event) {
event.preventDefault(); // Prevent the default form submission

// Clear the form fields
form.querySelectorAll('input, textarea').forEach(element => element.value = '');

// Display an alert message
alert('Your decision proposal has been submitted successfully!');
});
});
</script>
            <script src="path/to/bootstrap.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

</body>

</html>