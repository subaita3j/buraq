<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login1.php");
    exit();
}

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "webroyal";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];
    $deleteSql = "DELETE FROM career WHERE Id = $deleteId";
    if ($conn->query($deleteSql) === TRUE) {
        echo '<script>alert("Record deleted successfully.");</script>';
        header("Location: admin.php"); 
    } else {
        echo '<script>alert("Error deleting record: ' . $conn->error . '");</script>';
    }
}


$sql = "SELECT * FROM career";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
    <style>

.logout-button {
    background-color: #DAA520;
    color: #ffffff;
    border: 1px solid #ff0000;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    float:right;
    transition: background-color 0.3s, color 0.3s;
}

.logout-button i {
    margin-right: 5px;
}

.logout-button:hover {
    background-color: #DAA520;
    border: #DAA520;
    color:  #ff0000;
}


        </style>
</head>
<body>


<form method="post" action="logout.php">
    <button type="submit" class="logout-button">
        <i class="fa fa-sign-out"></i> Logout
    </button>
</form>


    <main class="content">
    <div style="text-align: center; margin-left: 15%">
    <h2 style="color: darkblue; font-size: 4vw; margin-top: -1vh;">Welcome to the Admin Panel</h2>
</div>

        <h2>Manage Careers</h2>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Experience</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Vacancy</th>
                    <th>Resume</th>
                    <th>Photo</th>
                    <th>Cover Letter</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["Id"] . "</td>
                            <td>" . $row["Name"] . "</td>
                            <td>" . $row["Experience"] . "</td>
                            <td>" . $row["Email"] . "</td>
                            <td>" . $row["PhoneNumber"] . "</td>
                            <td>" . $row["Vacancy"] . "</td>
                            <td>
                                <a href='download.php?file=Resume/" . $row["Resume"] . "' class='download-button'>
                                    <i class='fa fa-download'></i> Download Resume
                                </a>
                            </td>
                            <td>
                                <div style='display: flex; align-items: center;'>
                                    <img width='90px' height='80px' src='Photo/" . $row["Photo"] . "' alt='Photo' style='max-width: 100px; max-height: 100px; margin-right: 10px;background-color:#232D3F;'>
                                    <a  href='download.php?file=Photo/" . $row["Photo"] . "' class='download-button'>
                                        <i class='fa fa-download'></i> Download Photo
                                    </a>
                                </div>
                            </td>
                            <td>" . $row["Coverletter"] . "</td>
                            <td>
                                <form method='post' action=''>
                                    <input type='hidden' name='delete_id' value='" . $row["Id"] . "'>
                                    <button type='submit' style='background-color:red;color:white; border:1px solid #232D3F; border-radius:10px'; class='delete-button'>
                                        <i class='fa fa-trash'></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No data available.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    
  
</body>
</html>
