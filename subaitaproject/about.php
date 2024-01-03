<?php
session_start();
$isLoggedIn = isset($_SESSION['userName']);
?>

<?php


// Check if the 'userName' session variable is set
if (isset($_SESSION['userName'])) {
    // Retrieve the user's name from the session
    $userName = $_SESSION['userName'];
    
   
} else {
    // If 'userName' is not set, redirect to the login page or handle accordingly
    $userName = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GLhlTQ8iZS+9Lh8KGDeKnG5QkFF0URgPiWceomFkL5Cv5N2kwwxI1KGPVIUn7Zi6" crossorigin="anonymous">
   
        
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <title>Responsive Div with Bootstrap</title>
  <style>
    body {
      background-color: rgb(30, 8, 54);
    }

    .navbar {
        z-index: 2;
    }

    .navbar-brand img {
        width: 50%;
        max-width: 150px;
    }

    @media (max-width: 768px) {
        .navbar-brand img {
            max-width: 50px;
        }

        .nav-item img {
            max-width: 30px;
        }
    }

    .navbar-toggler {
        background-color:white;
    }

    .navbar-toggler-icon {
        border: none;
        display:block;
    }

    .navbar-nav {
        margin-right: 100px;
    }

    .navbar-nav .nav-link {
        color: transparent;
    background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%);
    -webkit-background-clip: text; /* For Safari/Chrome/iOS */
    background-clip: text;
        margin-right: 50px;
        font-size: 18px;
        font-weight: 400;
        text-align:center;
        font-weight:bold;
        
    }

    .navbar-nav .nav-link:hover {
        text-decoration: underline;
        color: white;
    }


    .bg-light-custom {
      border-radius: 40px;
      background-color: lightgrey;
    }

    .custom-button {
      font-size: 2rem;
      padding: 20px 40px;
      background-color: lightgrey !important;
      border-color: lightgrey !important;
      color: rgb(48, 9, 90);
    }

    @media (max-width: 576px) {
      .h1-responsive {
        font-size: 1.2rem;
      }

      .h3-responsive {
        font-size: 0.7rem;
      }

      .custom-button {
        font-size: 1.2rem;
        padding: 10px 20px;
      }
    }


    

   
    /* Custom CSS for responsive background */
    .col-12.col-md-8 {
      background-color: #3498db; /* Replace with your desired background color */
      /* You can also use background-image, background-size, etc. for background image */
      padding: 20px; /* Add padding for better visibility */
      color: #fff; /* Set text color to be visible on the background */
    }


/*footer*/
    .image-container5 {
            width: 100%;
            height: auto; /* Adjust the height as needed */
            /* Grey background color */
             /* Border radius */
            overflow: hidden;
            margin-bottom: 10px;
            padding-top:2%;
            margin-top:20%;
           
        }

        .image-container5 img {
            width: 100%;
           
            height: 70%;
            object-fit: cover; /* Maintain aspect ratio and cover container */
        }

        @media (max-width: 576px) {
        h5 {
            font-size: 10px !important;
        }

        .small-text {
            font-size: 10px !important;
        }
    }

    .btn {
    font-size: 2vw;
    background-color:darkblue;
    border:1px solid darkblue;
    border-radius:50px;
    padding-left:30px;
    padding-right:30px;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.register-btn {
      display: flex;
      margin-left:10px;
      align-items: center;
      justify-content: center;
      padding: 5px 20px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      color: white;
      background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%); 
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .register-btn:hover {
       background:darkblue;
      color: white;
    }

    .icon {
      margin-right: 10px;
    }

    @media (max-width: 600px) {
    .register-btn {
        font-size: 12px;
       width:100px;
       height:20px; /* Adjust the font size for small devices */
    }
}

/* Apply the animation to your images */
.img-fluid {
  animation: fadeIn 1.5s ease-in-out; /* Adjust the duration and timing function as needed */
}

  </style>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./buraq/buraqlogo.png" class="img-fluid" alt="Logo" style="position:absolute; margin-top:-20px">
                </a>
                <h4 style="color:white">Welcome, <?php echo $userName; ?>!</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="./buraq.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="./about.php">About Us</a></li>
<li class="nav-item"><a class="nav-link" href="./clients.php">Client</a></li>
<li class="nav-item"><a class="nav-link" href="./vacancy.php">Vacancies</a></li>
<?php if ($isLoggedIn): ?>
        <!-- If user is logged in, show the logout link -->
        <li class="nav-item">
            <a href="logout1.php" class="register-btn">
                <i class="icon fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
        
    <?php else: ?>
        <!-- If user is not logged in, show the login link -->
        <li class="nav-item">
           


            <select class="register-btn" style="background-color: black" onchange="redirectOnChange(this)">
            <option disabled selected>Login</option>
    <option data-icon="▼"> User</option>
    <option data-icon="▼"> Admin</option>
</select>

        </li>
    <?php endif; ?>

  

        <br>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <br>
    <br>
    <br>
  <!-- Responsive div with Bootstrap -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="bg-light p-4 bg-light-custom">
          <!-- Two horizontal divs -->
          <div class="row">
            <div class="col-md-5">
              <div>
                <img src="./vacancies/office.png" alt="Office Image" class="img-fluid rounded-circle mb-3"
                  style="max-width: 100%; height: auto;">
              </div>
            </div>
            <div class="col-md-7">
              <div class="p-3">
                <h1 class="h1-responsive" style="color: rgb(48, 9, 90);">b34u ueyt5 kie5y jery</h1><br>
                <h3 class="h3-responsive">dsf8 fsdie3 fsiefe9 fsdfsoee dsese this is the world class professional
                  computer to help peeople bla bla what oh common baby how are you i am fine and what abot you are you
                  fine or not and what are you doing yes i am in shop yes i am also coding right now.</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- Button at the bottom of the main div with increased size and light grey color -->
       

      </div>
    </div>
  </div>


  

<br>
  <div class="container">
    <div class="row">
       
        <div class="col-md-5 custom-div">
            <button class="btn btn-primary mt-3 align-self-end custom-button">VISION</button>
            <br>
            <br>
            <h3 class="h3-responsive" style="color:white">dsf8 fsdie3 fsiefe9 fsdfsoee dsese this is the world class professional
                computer to help peeople bla bla what oh common baby how are you i am fine and what abot you are you
                fine or not and what are you doing yes i am in shop yes i am also coding right now.</h3>
        </div>

    </div>

    <!-- Second Column -->
    <div class="row" style="margin-top:-2%">

        <div class="col-md-7"></div>
        <div class="col-md-5 custom-div">
            <button class="btn btn-primary mt-3 align-self-end custom-button">MISSION</button>
            <br>
            <br>
            <h3 class="h3-responsive" style="color:white">dsf8 fsdie3 fsiefe9 fsdfsoee dsese this is the world class professional
                computer to help peeople bla bla what oh common baby how are you i am fine and what abot you are you
                fine or not and what are you doing yes i am in shop yes i am also coding right now.</h3>
           
            </div>
        </div>
        
    </div>

<br>
<br>

<div class="container">
<button class="btn btn-primary mt-3 align-self-end custom-button mb-4">AGENCY LICENSE AND REGISTRATION</button>
    <div class="row">
   
        <div class="col-12 col-md-8">
            <!-- Your content goes here -->
            <img src="vacancies/sales pic 1.jpg" alt="Description of the image" class="img-fluid" style="padding:30px">
        </div>
    </div>

    <!-- Second Column -->
    <div class="row" style="margin-top: -2%;">
        <div class="col-md-4"></div>
        <div class="col-12 col-md-8">
            <!-- Your content goes here -->
            <img src="vacancies/sales pic 3.jpg" alt="Description of the second image" class="img-fluid" style="padding:30px">
        </div>
    </div>
</div>
<br>

    <footer class="bg-dark text-white">
    <div style="text-align: center;">
        <a href="#" class="btn btn-primary" style="text-align: center; margin-top: 2%; background-color: lightgrey; color: darkblue;">Explore ></a>
    </div>

    <div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-3" style="text-align:left">
                <a class="navbar-brand" href="#" >
                    <img src="./buraq/buraqlogo.png" class="img-fluid" alt="Logo" style="position: absolute; margin-top: 20px;">
                </a>
            </div>
            <div class="col-3">
                <div class="image-container5" style="text-align:left">
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">HOME</h5>
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">ABOUT US</h5>
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">VACANCIES</h5>
                </div>
            </div>
            <div class="col-3">
                <div class="image-container5" style="text-align:left">
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">OUR CLIENTS</h5>
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">BLOGS</h5>
                    <a href="apply.html" >
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">APPLY</h5>
    </a>
                </div>
            </div>
            <div class="col-3">
    <div class="image-container5" style="text-align:left">
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-phone"></i> +918364251196</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-phone"></i> +919845120154</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-envelope"></i> buraqconsultancy01@gmail.com</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-map-marker"></i> #33, 3rd Floor, Satellite Complex, Koppikar Road, HUBLI-580 020. Karnataka, INDIA</h5>
    </div>
</div>

        </div>
    </div>
   

    <div class="text-center py-3">
        <h5 style="font-size: 16px;  background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%); padding: 10px;">&copy; www.buraqconsultancy.co.in</h5>
    </div>
</footer>



  <!-- Bootstrap JS and Popper.js (optional) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>


