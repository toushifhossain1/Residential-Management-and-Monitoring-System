

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

textarea.complaint-description-box {
  height: 200px !important;
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
    h3 {
        color: blue;
        /* Blue color for greeting */
        text-align: center;
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
                                <a href="rentee_make_payment.php">Make Payment</a>
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
    <div class="row">
      <div class="col-md-12">
      <h3><i class="fas fa-bell"></i> Inform Manager</h3>

        <p>
          Please feel free to let us know what problem you are facing or technician help you need,where it is occuring and any picture (if available).
        </p>

        <form>
        <div class="form-group">
  <b><label for="complaintDescription">Description of Issue:</label></b>
  <textarea class="form-control" id="complaintDescription" rows="10" placeholder="Please describe your complaint in detail."></textarea>
</div>


          <div class="form-group mt-4">
            <b><label for="complaintLocation">Location of Incident (e.g., flat number, floor number):</label></b>
            <input type="text" class="form-control" id="complaintLocation" placeholder="Enter the location of the incident.">
          </div>

          <div class="form-group mt-4">
           <b> <label for="complaintImage">Upload Image (Optional):</label></b>
            <input type="file" class="form-control" id="complaintImage">
          </div>

          <div class="form-group mt-4">
           <b> <label for="complaintDate">Date of Complaint:</label></b>
            <input type="date" class="form-control" id="complaintDate">
          </div>

          <button type="submit" class="btn btn-primary mt-2">Submit </button>
        </form>
      </div>
    </div>

  
</div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script
 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 
integrity="sha384-ka7Sk0Gln4gmtz2mlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 
crossorigin="anonymous"></script>

</body>

</html>