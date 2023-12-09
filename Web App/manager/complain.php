<!doctype html>
<html lang="en">

<head>
  <title>View Complain</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-..." crossorigin="anonymous"> <!-- Add the Font Awesome library -->
</head>
<style>
  h3 {
    color: blue;
    /* Blue color for greeting */
    text-align: center;
    margin-top: 20px;
    font-weight: 400;
  }


  .card {
    border-radius: 5px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background-color: #f1f1f1;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
  }

  .card-body {
    padding: 15px;
  }

  .card-body p {
    line-height: 1.5;
  }

  .card-body img {
    max-width: 100%;
    height: auto;
  }

  .btn-primary {
    background-color: #04AA6D;
    border-color: transparent;
    color: #fff;
    margin-left: 5px;
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
                class="fas fa-list-alt"></i> View Complain </a></a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="manager.php"><i class="fas fa-home"></i> Homepage</a>
              </li>


              <li>
                <a href="assigned_task.php">
                  <i class="fas fa-tasks"></i> Assigned Task
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

      <h3><i class="fas fa-eye"></i> View Complaints</h3>


      <?php
      $link = mysqli_connect("localhost", "root", "", "rmms");

      if ($link === false) {
        die("Error: Could not connect." . mysqli_connect_error());
      }

      $sql = "SELECT renteeinformmanager.`RenteeID`, renteeinformmanager.`ComplainMessage`, renteeinformmanager.`DateOfComplain`, renteeinformmanager.`LocationOfIncident`, rentee.`RenteeName`,rentee.`FlatNo` FROM `renteeinformmanager` renteeinformmanager INNER JOIN `rentee` ON renteeinformmanager.`RenteeID` = rentee.`RenteeID`;";
      $result = mysqli_query($link, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <strong>Complaint by
                  <?php echo $row['RenteeName']; ?>
                </strong>
                <small class="float-end">Submitted on:
                  <?php echo $row['DateOfComplain']; ?>
                </small>
              </div>
              <div class="card-body">
                <p><strong>Flat Number:</strong>
                  <?php echo $row['FlatNo']; ?>
                </p>
                <p><strong>Description:</strong>
                  <?php echo $row['ComplainMessage']; ?>
                </p>
                <p><strong>Location:</strong>
                  <?php echo $row['LocationOfIncident']; ?>
                </p>

                <div class="d-flex justify-content-end mt-3">
                  <button class="btn btn-primary">Mark as Resolved</button>
                  <button class="btn btn-primary">Assign to maintenance</button>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        mysqli_free_result($result); // Free result set
      } else {
        echo "Error: Could not execute $sql." . mysqli_error($link);
      }

      mysqli_close($link);
      ?>

    </div>








    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>