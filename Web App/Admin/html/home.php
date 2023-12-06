<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>






    <div class="container text-center">
        <div class="row row-cols-2">




            <div class="col" id="building">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Building</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">



                        <?php
                        $link = mysqli_connect("localhost", "root", "", "rmms");

                        if($link === false) {
                            die("Error: Could not connect.".mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM building";
                        $result = mysqli_query($link, $sql);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {

                                echo "<p><b>House Certification:</b> ".$row['HouseCertificationNo']."</p>";
                                echo "<p><b>Building Name:</b> ".$row['BuildingName']."<p>";
                                echo "<p><b>Build Year:</b> ".$row['BuildYear']."<p>";
                                echo "<p><b>RealState Developer:</b> ".$row['RealStateDeveloper']."<p>";
                                echo "<p><b>Insurance No:</b> ".$row['InsuranceNo']."<p>";
                                echo "<p><b>Location:</b> ".$row['Location']."<p>";
                                echo "<p><b>No. Of Floors:</b> ".$row['NoOfFloors']."<p>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql.".mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>

                    </ul>
                </div>
            </div>


            <div class="col" id="visitor">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Visitor Info</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">



                        <?php
                        $link = mysqli_connect("localhost", "root", "", "rmms");

                        if($link === false) {
                            die("Error: Could not connect.".mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM building";
                        $result = mysqli_query($link, $sql);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {

                                echo "<p><b>House Certification:</b> ".$row['HouseCertificationNo']."</p>";
                                echo "<p><b>Building Name:</b> ".$row['BuildingName']."<p>";
                                echo "<p><b>Build Year:</b> ".$row['BuildYear']."<p>";
                                echo "<p><b>RealState Developer:</b> ".$row['RealStateDeveloper']."<p>";
                                echo "<p><b>Insurance No:</b> ".$row['InsuranceNo']."<p>";
                                echo "<p><b>Location:</b> ".$row['Location']."<p>";
                                echo "<p><b>No. Of Floors:</b> ".$row['NoOfFloors']."<p>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql.".mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>

                    </ul>
                </div>
            </div>


            <div class="col" id="building">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Building</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">



                        <?php
                        $link = mysqli_connect("localhost", "root", "", "rmms");

                        if($link === false) {
                            die("Error: Could not connect.".mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM building";
                        $result = mysqli_query($link, $sql);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {

                                echo "<p><b>House Certification:</b> ".$row['HouseCertificationNo']."</p>";
                                echo "<p><b>Building Name:</b> ".$row['BuildingName']."<p>";
                                echo "<p><b>Build Year:</b> ".$row['BuildYear']."<p>";
                                echo "<p><b>RealState Developer:</b> ".$row['RealStateDeveloper']."<p>";
                                echo "<p><b>Insurance No:</b> ".$row['InsuranceNo']."<p>";
                                echo "<p><b>Location:</b> ".$row['Location']."<p>";
                                echo "<p><b>No. Of Floors:</b> ".$row['NoOfFloors']."<p>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql.".mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>

                    </ul>
                </div>
            </div>


















        </div>

    </div>



</body>

</html>