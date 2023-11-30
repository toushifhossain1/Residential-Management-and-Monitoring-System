<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Filled Form Data</title>
    <link rel="stylesheet" href="FilledUpFormCSS.css">
</head>

<body>
    <h2>Filled Form Data</h2>
    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>PhoneNo</th>
                    <th>WebAddress</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect("localhost", "root", "", "rmms");

                if ($link === false) {
                    die("Error: Could not connect." . mysqli_connect_error());
                }

                $sql = "SELECT * FROM serviceform";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['FullName'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['PhoneNo'] . "</td>";
                        echo "<td>" . $row['WebAddress'] . "</td>";
                        echo "<td>" . $row['Message'] . "</td>";
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
    </div>
</body>

</html>