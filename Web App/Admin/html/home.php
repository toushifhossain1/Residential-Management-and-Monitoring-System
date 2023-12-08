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

                        if ($link === false) {
                            die("Error: Could not connect." . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM building";
                        $result = mysqli_query($link, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<p><b>House Certification:</b> " . $row['HouseCertificationNo'] . "</p>";
                                echo "<p><b>Building Name:</b> " . $row['BuildingName'] . "<p>";
                                echo "<p><b>Build Year:</b> " . $row['BuildYear'] . "<p>";
                                echo "<p><b>RealState Developer:</b> " . $row['RealStateDeveloper'] . "<p>";
                                echo "<p><b>Insurance No:</b> " . $row['InsuranceNo'] . "<p>";
                                echo "<p><b>Location:</b> " . $row['Location'] . "<p>";
                                echo "<p><b>No. Of Floors:</b> " . $row['NoOfFloors'] . "<p>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql." . mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>

                    </ul>
                </div>
            </div>


            <div class="col" id="visitor">
                <table style="border-collapse: collapse; width: 100%;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid black;">Visitor NID</th>
                            <th style="border: 1px solid black;">Visitor Name</th>
                            <th style="border: 1px solid black;">Visitor Phone No</th>
                            <th style="border: 1px solid black;">Enter Time</th>
                            <th style="border: 1px solid black;">Exit Time</th>
                            <th style="border: 1px solid black;">Guard ID</th>
                            <th style="border: 1px solid black;">Guard Name</th>
                            <th style="border: 1px solid black;">Guard Shift</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $link = mysqli_connect("localhost", "root", "", "rmms");

                        if ($link === false) {
                            die("Error: Could not connect." . mysqli_connect_error());
                        }

                        $sql = "SELECT VisitorNID,VisitorName,VisitorContactNo, EnterTime, ExitTime, visitorinformation.GuardID, GuardName,ShiftDay  FROM visitorinformation INNER JOIN guard ON visitorinformation.GuardID = guard.GuardID;";
                        $result = mysqli_query($link, $sql);

                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td style='border: 1px solid black;'>" . $row["VisitorNID"] . "</td>";
                                echo "<td style='border: 1px solid black;'>" . $row["VisitorName"] . "</td>";
                                echo "<td style='border: 1px solid black;'>" . $row["VisitorContactNo"] . "</td>";
                                echo "<td style='border: 1px solid black;'>" . date("Y, M - d h:i A", strtotime($row["EnterTime"])) . "</td>";
                                echo "<td style='border: 1px solid black;'>" . date("Y, M - d h:i A", strtotime($row["ExitTime"])) . "</td>";
                                echo "<td style='border: 1px solid black;'>" . $row["GuardID"] . "</td>";
                                echo "<td style='border: 1px solid black;'>" . $row["GuardName"] . "</td>";
                                if ($row["ShiftDay"] == "1") {
                                    echo "<td style='border: 1px solid black;'>Day</td>";
                                } else {
                                    echo "<td style='border: 1px solid black;'>Night</td>";
                                }
                                echo "</tr>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql." . mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>
                    </tbody>
                </table>
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

                        if ($link === false) {
                            die("Error: Could not connect." . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM building";
                        $result = mysqli_query($link, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<p><b>House Certification:</b> " . $row['HouseCertificationNo'] . "</p>";
                                echo "<p><b>Building Name:</b> " . $row['BuildingName'] . "<p>";
                                echo "<p><b>Build Year:</b> " . $row['BuildYear'] . "<p>";
                                echo "<p><b>RealState Developer:</b> " . $row['RealStateDeveloper'] . "<p>";
                                echo "<p><b>Insurance No:</b> " . $row['InsuranceNo'] . "<p>";
                                echo "<p><b>Location:</b> " . $row['Location'] . "<p>";
                                echo "<p><b>No. Of Floors:</b> " . $row['NoOfFloors'] . "<p>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: Could not execute $sql." . mysqli_error($link);
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