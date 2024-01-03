<?php
session_start();

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "webroyal";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch values from the form
    $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $phoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : null;

    // Check if user exists in the database
    $stmt = $conn->prepare("SELECT * FROM career WHERE Email = :email AND PhoneNumber = :phoneNumber");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->execute();

    // If a matching record is found, the user is authenticated
    if ($stmt->rowCount() > 0) {
        // Fetch the user's name from the database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['userName'] = $user['Name'];

        // Redirect to the next page
        header("Location: buraq.php");
        exit();
    } else {
        // Invalid login, handle accordingly (e.g., show an error message)
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>



<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Application Form</title>
    <style>
        body, h2, form {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif; /* Apply Montserrat font-family */
        }

        .container {
            width: 80%;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: lightgrey;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

       

label {
    display: block;
    font-weight: bold;
}

        .input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
            background-color:grey;
            color:white;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333; /* Darken label color for better visibility */
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
                margin: 10px auto;
                padding: 10px;
            }

            h2 {
                font-size: 1.4em;
            }

            .input, select, textarea {
                font-size: 14px;
                padding: 8px;
            }

            .form-group {
                margin-bottom: 10px;
                font-size:10px;
            }

            input[type="submit"] {
                padding: 8px 16px;
            }
        }
    </style>
</head>
</head>

<body>
    <div class="container" style="margin-top:10%">
        <h2>LOGIN</h2>
        <br>
        <br>
        <form action="" method="POST" enctype="multipart/form-data" style="padding-right:40px; padding-left:20px;">
            <div class="form-group">
                <label for="Email">EMAIL:</label>
                <input type="email" name="Email" class="input" required>
            </div>
            <div class="form-group">
                <label for="PhoneNumber">PHONE NUMBER:</label>
                <input type="text" name="PhoneNumber" class="input" required>
            </div>
            <div class="form-group">
                <input type="submit" style="background-color:black" value="Submit">
            </div>
            <p>Dont have an account<a href="conn.html"><span> Register</span></a></p>
        </form>
    </div>
</body>

</html>




