<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous"> <!-- Add the Font Awesome library -->
  </head>
  <style>body, html {
            height: 100%;
            margin: 0;
            background-color: #ece6ff;
            
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #555; /* Text color (grey) */
        }
        
        

        h1 {
            color: blue; /* Blue color for greeting */
        }

        .rules-container,
        .complain-container,
        .servant-work-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            border-radius: 20px;
            background-color: #f8f9fa; /* Light gray background */
        }

        .complain-container .card {
            margin-top: 10px;
            background-color: #fff; /* White background for cards */
        }

        .servant-work-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            background-color: #f8f9fa; /* Light gray background */
            display: flex;
            align-items: center;
            justify-content: center; /* Center the content horizontally */
            text-align: center; /* Center the text within the container */
        }
		.clock-icon {
            margin-right: 10px;
            font-size: 24px; /* Adjust the size of the clock icon */
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
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
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
    <h1>Hi, Rentee!</h1>

    <div class="rules-container">
        <p><b>New Rules (2023-12-01):</b></p>
        <p>Please keep your room clean and tidy.</p>
    </div>

    <div class="complain-container">
        <div class="card">
            <div class="card-header">
                <b>Complaint Date:</b> 2023-11-29
            </div>
            <div class="card-body">
                <p><b>Complaint:</b> The WiFi is slow.</p>
                <p><b>Feedback:</b> The WiFi has been upgraded and is now working properly.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <b>Complaint Date:</b> 2023-11-30
            </div>
            <div class="card-body">
                <p><b>Complaint:</b> The air conditioning is not working.</p>
                <p><b>Feedback:</b> The air conditioning has been repaired and is now working properly.</p>
            </div>
        </div>
    </div>

    <div class="servant-work-container">
   
    <div>
        <p> <b>Servant Work Schedule:</b></p>
        <p><span class="clock-icon"><i class="fas fa-clock"></i></span><b>Start Time:</b> 09:00</p>
        <p><span class="clock-icon"><i class="fas fa-clock"></i></span><b>End Time:</b> 17:00</p>
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