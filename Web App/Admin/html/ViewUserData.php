<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User Data</title>
    <link rel="stylesheet" href="FilledUpFormCSS.css">
</head>

<body>
    <h2>User Data</h2>
    <div class="container">
        <h3>Flat Owner</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>OwnershipIdentityNumber</th>
                    <th>Date Of Ownership</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>NID</th>
                    <th>FlatNo</th>
                    <th>Type</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect("localhost", "root", "", "rmms");

                if ($link === false) {
                    die("Error: Could not connect." . mysqli_connect_error());
                }

                $sql = "SELECT * FROM flatowner INNER JOIN flatownerstate ON flatowner.OwnershipIdentityNumber = flatownerstate.OwnershipIdentityNumber";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['OwnershipIdentityNumber'] . "</td>";
                        echo "<td>" . $row['DateOfOwnership'] . "</td>";
                        echo "<td>" . $row['FlatOwnerName'] . "</td>";
                        echo "<td>" . $row['FlatOwnerGender'] . "</td>";
                        echo "<td>" . $row['FlatOwnerPhoneNo'] . "</td>";
                        echo "<td>" . $row['FlatOwnerEmail'] . "</td>";
                        echo "<td>" . $row['FlatOwnerDOB'] . "</td>";
                        echo "<td>" . $row['FlatOwnerNID'] . "</td>";
                        echo "<td>" . $row['FlatNo'] . "</td>";
                        if ($row['SOID'] == NULL) {
                            echo "<td>" . "Renter" . "</td>";
                            echo "<td>" . $row['RenterID'] . "</td>";

                        } else {
                            echo "<td>" . "Self Owner" . "</td>";
                            echo "<td>" . $row['SOID'] . "</td>";
                        }

                        echo "</tr>";
                    }
                    mysqli_free_result($result); // Free result set
                } else {
                    echo "Error: Could not execute $sql." . mysqli_error($link);
                }

                mysqli_close($link);
                ?>
            </tbody>
        </table>



        <br>
        <h3>Rentee</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>NID</th>
                    <th>Occupation</th>
                    <th>Mobile Number</th>
                    <th>Payment BankAccount No</th>
                    <th>Flat No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect("localhost", "root", "", "rmms");

                if ($link === false) {
                    die("Error: Could not connect." . mysqli_connect_error());
                }

                $sql = "SELECT * FROM `rentee`";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['RenteeID'] . "</td>";
                        echo "<td>" . $row['RenteeName'] . "</td>";
                        echo "<td>" . $row['RenteeGender'] . "</td>";
                        echo "<td>" . $row['RenteePhoneNo'] . "</td>";
                        echo "<td>" . $row['RenteeEmail'] . "</td>";
                        echo "<td>" . $row['RenteeDOB'] . "</td>";
                        echo "<td>" . $row['RenteeNID'] . "</td>";
                        echo "<td>" . $row['RenteeOccupation'] . "</td>";
                        echo "<td>" . $row['PaymentMobileNo'] . "</td>";
                        echo "<td>" . $row['PaymentBankAccountNo'] . "</td>";
                        echo "<td>" . $row['FlatNo'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($result); // Free result set
                } else {
                    echo "Error: Could not execute $sql." . mysqli_error($link);
                }

                mysqli_close($link);
                ?>
            </tbody>
        </table>






        <br>
        <h3>Manager</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>HouseCertificationNo</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>NID</th>
                    <th>DOB</th>
                    <th>Salary</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect("localhost", "root", "", "rmms");

                if ($link === false) {
                    die("Error: Could not connect." . mysqli_connect_error());
                }

                $sql = "SELECT * FROM `manager`";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['ManagerID'] . "</td>";
                        echo "<td>" . $row['HouseCertificationNo'] . "</td>";
                        echo "<td>" . $row['ManagerName'] . "</td>";
                        echo "<td>" . $row['ManagerPhoneNo'] . "</td>";
                        echo "<td>" . $row['ManagerAddress'] . "</td>";
                        echo "<td>" . $row['ManagerNID'] . "</td>";
                        echo "<td>" . $row['ManagerDOB'] . "</td>";
                        echo "<td>" . $row['ManagerSalary'] . "</td>";
                        ;
                        echo "</tr>";
                    }
                    mysqli_free_result($result); // Free result set
                } else {
                    echo "Error: Could not execute $sql." . mysqli_error($link);
                }

                mysqli_close($link);
                ?>
            </tbody>
        </table>


        <br>
    </div>
</body>

</html>