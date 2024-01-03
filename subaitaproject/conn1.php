


<!DOCTYPE html>
<html lang="en">

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

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
        }
        
        /* Styles for the green tick */
        .success-icon {
            color: green;
            font-size: 36px;
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

<body>
    <div class="container">
        <h2>APPLICATION FORM</h2>
        <br>
        <br>
        <form action="connect.php" method="POST" enctype="multipart/form-data" style="padding-right:40px; padding-left:20px;">
            <div class="form-group">
                <label for="Name">NAME:</label>
                <input type="text" name="Name" class="input" required>
            </div>

            <div class="form-group">
                <label for="Email">EMAIL:</label>
                <input type="email" name="Email" class="input" required>
            </div>
            <div class="form-group">
                <label for="PhoneNumber">PHONE NUMBER:</label>
                <input type="text" name="PhoneNumber" class="input" required>
            </div>

            <div class="form-group">
                <label for="YearsOfExperience">YEARS OF EXPERIENCE:</label>
                <select name="YearsOfExperience" class="input" required>
                    <option value="" disabled selected> Years of experience</option>
                    <option value="0-1">0-1 years</option>
                    <option value="1-3">1-3 years</option>
                    <option value="3-5">3-5 years</option>
                    <option value="5+">5+ years</option>
                </select>
            </div>

            <div class="form-group">
                <label for="vacancy">VACANCY</label>
                <select name="vacancy" class="input" required>
                    <option value="" disabled selected> Vacancy</option>
                    <option value="Hospitality">Hospitality</option>
                    <option value="Construction">Construction</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Drivers">Drivers</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Airport">Airport</option>
                    <option value="Sales">Sales</option>
                    <option value="Backends">Backends</option>
                    <option value="Unskilled workers">Unskilled workers</option>
                </select>
            </div>

            <div class="form-group">
                <label for="uploadfile">RESUME:</label>
                <input type="file" name="uploadfile" class="input" required>
            </div>
            <div class="form-group">
                <label for="uploadfilea">PHOTO:</label>
                <input type="file" name="uploadfilea" class="input" required>
            </div>
            <div class="form-group">
                <label for="Coverletter">COVER LETTER:</label>
                <textarea name="Coverletter" rows="4" class="input" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" style="background-color:black" value="Submit">
            </div>
        </form>
    </div>
    <div id="myModal" class="modal">
        <p class="success-icon">&#10004;</p>
        <p>Registration successful!</p>
    </div>
    <script>
        
        function showModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';

           
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 3000); 
        }

       
        window.onload = showModal;
    </script>


</body>

</html>



