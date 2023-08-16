<!DOCTYPE html>
<html>
<head>
<style>
    h1{

        color:white;
    }
     body {
        background-image: url("background2.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        color:white;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
        font-weight: bold;
    }

    a {
        padding: 6px 12px;
        background-color: blue;
        color: white;
        text-decoration: none;
    }

    a:hover {
        background-color: #0045a0;
    }
</style>
</head>
<body>
<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h1><center>View Page</center></h1>";
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                    <th>Country</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["username"] . "</td>
                    <td>*****</td>
                    <td>" . $row["address"] . "</td>
                    <td>" . $row["city"] . "</td>
                    <td>" . $row["state"] . "</td>
                    <td>" . $row["zipcode"] . "</td>
                    <td>" . $row["country"] . "</td>
                    <td><a href='update.php?id=" . $row["id"] . "'>Update</a></td>
                    <td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    mysqli_close($conn);
?>
</body>
</html>