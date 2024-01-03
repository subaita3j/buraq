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
    <meta charset="utf-8" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GLhlTQ8iZS+9Lh8KGDeKnG5QkFF0URgPiWceomFkL5Cv5N2kwwxI1KGPVIUn7Zi6" crossorigin="anonymous">


    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap"
      rel="stylesheet"
    />


    
    
  </head>
  <style>
   body {
    background-color:#0c2945
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
        margin-left:400px;
        background-color:white;
    }

    .navbar-toggler-icon {
        border: none;
        
       
    }
    @media (max-width: 767.98px) {
    .navbar-toggler {
        margin-left: 100px; /* Adjust this value based on your design */
    }
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



    .main-container {
            display: flex;
            justify-content: space-between;
        }

        .container {
          
            margin-top: 6%;
            width: 60%;
            margin-left: 2%;
        }

        .extra-top,
        .top,
        .middle,
        .bottom {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .rectangle {
            width: 150px;
            height: 150px;
            background-color: #ecf0f1;
            border: 2px solid #34495e;
            border-radius:20px;
            margin-left: 16%;
            margin-top: -8%;
            transform: rotate(45deg);
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease; /* Smooth transition for the transform property */
}

.rectangle:hover {
    transform: scale(1.2); /* Increase the size on hover (adjust the scale factor as needed) */
}
        .rectangle img {
            width: 150%;
            height: 150%;
            object-fit: cover;
            transform: rotate(-45deg);
            margin-top:-23%;
            margin-left:-35%;
        }

        .additional-div {
           
           
            width: 40%;
            background-color:rgb(4, 4, 35);

            
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .container {
                width: 80%; /* Adjust the width for small screens */
                 /* Adjust the margin for small screens */
            }

            .rectangle {
                width: 60px;
                height: 60px;
                margin-left: 14%;
                margin-top: -15%;
                border-radius: 5px;
                
            }

         

            .additional-div {
                width: 80%; /* Adjust the width for small screens */
                margin-top: 10%;
                margin-left:10%;
            }
        }

        .golden-texture {
    position: relative;
    display: inline-block;
    font-size: 45px; /* Adjust font size as needed */
    color: transparent;
    background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%);
    -webkit-background-clip: text; /* For Safari/Chrome/iOS */
    background-clip: text;
    font-family: 'Arial', sans-serif; 
    font-weight:bold;
    margin-top:10%;
   
    
 
}

@media (max-width: 768px) {
        .main-container {
            flex-direction: column;
            align-items: center; /* Center items on small screens */
        }

       

       

        .additional-div {
            width: 80%;
            margin-top: 10%;
            margin-left: 0;
        }

        .golden-texture {
            font-size: 30px; /* Adjust font size for small screens */
            margin-top: 5%;
        }

        ul li {
            font-size: 14px; /* Adjust font size for small screens */
        }
    }

    .golden-line {
            border-top: 5px solid #b09b3f;
            margin-top: 0px;
             /* Adjust the margin as needed */
        }

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

.btn:hover {
    background-color:green;
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


    </style>

    <body>

        <section id="navbar" style="margin-left:40%; margin-top:-2%">
            <nav class="navbar navbar-expand-lg">
                <div class="container1">
                    <a class="navbar-brand" href="#">
                        <img src="./buraq/buraqlogo.png" class="img-fluid" alt="Logo" style="position:absolute;  margin-left:-50%">
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


    
      <section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>
</section>


<section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>
</section>


<section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>
</section>

<section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>
</section>

<section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>
</section>

<section>
    <div class="main-container">
        <div class="additional-div"  >
          <div class="golden-texture" >
            Your Text Here
        </div>
        <ul style="font-size:25px; color:white">
          <li> Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li> Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
          <li>Your text here</li>
        </ul>
        </div>


        
      
        <div class="container">
            <div class="extra-top">
                <div class="rectangle">
                    <img  src="./vacancies/airport pic 1.jpeg" alt="Image 1" >
                </div>
            </div>
            <div class="top">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 2.jpg" alt="Image 2">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="middle">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="bottom">
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 5">
                </div>
                <div class="rectangle">
                    <img src="./vacancies/airport pic 5.jpg" alt="Image 6">
                </div>
            </div>
        </div>

    </div>
    <div class="golden-line"></div>

    
</section>


<br>

<footer class="bg-dark text-white" >
    <div style="text-align: center;">
        <a href="#" class="btn btn-primary" style="text-align: center; margin-top: 2%; background-color: lightgrey; color: darkblue;">Explore ></a>
    </div>

    <div class="container" style="margin-left:20%; ">
        <div class="row">
            <div class="col-3" style="text-align:left;">
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
                    <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;">APPLY</h5>
                </div>
            </div>
            <div class="col-3">
    <div class="image-container5" style="text-align:left">
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-phone"></i> +918364251196</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-phone"></i> +919845120154</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-envelope"></i> buraqconsultancy012gmail.com</h5>
        <h5 style="color: black; font-size: 18px; color: white; margin-bottom: 10px;"><i style="color:yellow" class="fa fa-map-marker"></i> #33, 3rd Floor, Satellite Complex, Koppikar Road, HUBLI-580 020. Karnataka, INDIA</h5>
    </div>
</div>

        </div>
    </div>
    

    <div class="text-center py-3">
        <h5 style="font-size: 16px;  background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%); padding: 10px;">&copy; www.buraqconsultancy.co.in</h5>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  
    </body>
