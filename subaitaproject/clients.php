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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>clients</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GLhlTQ8iZS+9Lh8KGDeKnG5QkFF0URgPiWceomFkL5Cv5N2kwwxI1KGPVIUn7Zi6" crossorigin="anonymous">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto Condensed', sans-serif;
        background: rgb(233, 222, 222);
        position: relative;
        color: white;
        font-size: 40px;
    }

    @media (max-width: 768px) {
        body {
            font-size: 12px;
        }
    }

    .navbar {
        z-index: 2;
    }

    .navbar-brand img {
        width: 50%;
        max-width: 150px;
    }

    .navbar-toggler {
        background-color: white;
    }

    .navbar-toggler-icon {
        border: none;
    }

    .navbar-nav {
        margin-right: 100px;
    }

    @media (max-width: 768px) {
        .navbar-brand img {
            max-width: 50px;
        }

        .nav-item img {
            max-width: 30px;
        }
    }

    .navbar-nav .nav-link {
        color: transparent;
        background: linear-gradient(45deg, #b09b3f 10%, #ead280 20%, #b09b3f 30%, #ead280 40%, #b09b3f 50%, #ead280 60%, #b09b3f 70%, #ead280 80%, #b09b3f 90%, #ead280 100%);
        -webkit-background-clip: text;
        background-clip: text;
        margin-right: 50px;
        font-size: 18px;
        font-weight: 400;
        text-align: center;
        font-weight: bold;
    }

    .navbar-nav .nav-link:hover {
        text-decoration: underline;
        color: white;
    }

    #hero {
        position: relative;
        z-index: 1;
        margin-top: -70px;
        height: 150%;
    }

    #hero img {
        width: 100%;
        height: 150%;
    }

    .card-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        z-index: 1;
        margin-top:-25%;
        width:75%;
       
       
        
    }





    .card {
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 1200px;
    height: auto;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 2;
    background-color: rgba(211, 211, 211, 0.626);
    margin-top:2%; /* Adjust the alpha value as needed */
}

.card1 {
    position: absolute;
    margin-top:7%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    
    height: auto;
    padding: 20px;
  
    z-index: 2;
    /* Adjust the alpha value as needed */
}




    /* Default styles */
    .card-title,
    .card-text {
        font-size: 3vw;
    }

    .card-container3 {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        z-index: 1;
        margin-top:-30%;
        width:100%; 
    }

    .card3 {
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
    max-width: 1200px;
    height: auto;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 2;
    background-color: rgba(60, 105, 198, 0.626);
    border-radius:10px;
 /* Adjust the alpha value as needed */
}

    .btn {
        font-size: 2vw;
        background-color: darkblue;
        border: 1px solid darkblue;
        border-radius: 50px;
        padding-left: 30px;
        padding-right: 30px;
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

    .image-container1 {
        position: relative;
        margin-left: 80%;
        margin-top: -15%;
    }

    .image-container1 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 30%;
        height: auto;
        z-index: 3;
        box-shadow: 4px 3px 9px 0px #2d2d2d;
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }

    .image-container1:hover .second-image {
        opacity: 1;
        transform: scale(1.1);
    }

    .second-image {
        z-index: 2;
        transform: translate(-50%, -50%);
        box-shadow: 4px 3px 9px 0px #2d2d2d;
    }

    .translate-div {
        transform: translateY(50%);
    }

    .translate-div1 {
        transform: translateY(100%);
    }

    /*footer*/
    footer {
        margin-top:80%;
    }
    .image-container5 {
        width: 100%;
        height: auto;
        overflow: hidden;
        margin-bottom: 10px;
        padding-top: 2%;
        margin-top: 20%;
        z-index:0;
    }

    .image-container5 img {
        width: 100%;
        height: 70%;
        object-fit: cover;
    }

    @media (max-width: 576px) {
        h5 {
            font-size: 8px !important;
        }

        .small-text {
            font-size: 8px !important;
        }
    }

    .image-div {
        
        width: 200px;
        margin-left: 2%;
        margin-top:2%;
        overflow: hidden;
        border-radius:30%;
       
    }

    .image-div img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        
    }

    .image-div1 {
        
        width: 200px;
        margin-left: 2%;
        margin-top:4%;
        overflow: hidden;
        border-radius:3%;
        box-shadow: 4px 3px 9px 0px #2d2d2d; 
    }

    .image-div1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 4px 3px 9px 0px #2d2d2d; /* Box shadow for each image */
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.image-div1:hover img {
    opacity: 1;
    transform: scale(1.1);
    box-shadow: 8px 6px 18px 0px #2d2d2d; /* Adjusted box shadow on hover */
}

.additional-div .image-div img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 4px 3px 9px 0px #2d2d2d; /* Box shadow for each image */
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.additional-div .image-div:hover img {
    opacity: 1;
    transform: scale(1.1);
    box-shadow: 8px 6px 18px 0px #2d2d2d; /* Adjusted box shadow on hover */
}

@media (max-width: 768px) {
    h4 {
        font-size: 8px; /* Adjust the font size for small screens */
    }
}




@media (max-width: 768px) {
    .card-body h4 {
        margin-bottom: 2px; /* Further decrease margin for small screens */
        font-size: 8px;
         /* Adjust font size for better responsiveness */
    }
   
}

</style>

<body>
    <!-- Navbar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./buraq/buraqlogo.png" class="img-fluid" alt="Logo" style="position:absolute; margin-top:-20px">
                </a>
                <h4>Welcome, <?php echo $userName; ?>!</h4>
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
            <a href="login.php">
    <option data-icon="▼"> User</option></a>
    <a href="login1.php">
    <option data-icon="▼"> Admin</option> </a>
</select>

        </li>
    <?php endif; ?>

  

        <br>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="hero">
        <div class="hey">
            <div class="row">
                <img src="./buraq/buraq.png" class="img-fluid" alt="Hero Image" >
            </div>

        </div>
    </section>




    
    <div class="card-container1">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <!-- First image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 1.jpg" alt="Image 1">
                        </div>
    
                        <!-- Second image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 2.jpg" alt="Image 1">
                        </div>
    
                        <!-- Third image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 3.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fourth image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 4.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fifth image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 5.jpg" alt="Image 1">
                        </div>

                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 6.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fifth image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/download 5.jpg" alt="Image 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-container1" >
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card1" style="margin-top:20%">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <!-- First image div -->
                        <div class="image-div1">
                            
                        </div>
    
                        <!-- Second image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/download 6.jpg" alt="Image 1">
                        </div>
    
                        <!-- Third image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/download 7.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fourth image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/download 8.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fifth image div -->
                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 8.jpg" alt="Image 1">
                        </div>

                        <div class="image-div1">
                        <h5 style="color: black; font-size: 1.5vw;  text-align: center; margin-top: 8px;">KAZAKISTAN</h5>
                            <img src="./vacancies/images 9.jpg" alt="Image 1">
                        </div>
    
                        <!-- Fifth image div -->
                        <div class="image-div1">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
  






    <div class="card-container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- First additional div -->
                        <div class="additional-div d-flex">
                            <!-- First image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client1.jpg" alt="Image 1" class="img-fluid">
                            </div>
    
                            <!-- Second image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client2.jpg" alt="Image 2" class="img-fluid">
                            </div>
    
                            <!-- Third image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client3.jpg" alt="Image 3" class="img-fluid">
                            </div>
    
                            <!-- Fourth image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client4.jpg" alt="Image 4" class="img-fluid">
                            </div>
    
                            <!-- Fifth image div -->
                            <div class="image-div">
                                <img src="vacancies/client5.jpg" alt="Image 5" class="img-fluid">
                            </div>
                        </div>
    
                        <!-- Second additional div -->
                        <div class="additional-div d-flex">
                            <!-- First image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client6.jpg" alt="Image 1" class="img-fluid">
                            </div>
    
                            <!-- Second image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client7.jpg" alt="Image 2" class="img-fluid">
                            </div>
    
                            <!-- Third image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client8.jpg" alt="Image 3" class="img-fluid">
                            </div>
    
                            <!-- Fourth image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client9.jpg" alt="Image 4" class="img-fluid">
                            </div>
    
                            <!-- Fifth image div -->
                            <div class="image-div">
                                <img src="vacancies/client10.jpg" alt="Image 5" class="img-fluid">
                            </div>
                        </div>
    
                        <div class="additional-div d-flex">
                            <!-- First image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client11.jpg" alt="Image 1" class="img-fluid">
                            </div>
    
                            <!-- Second image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client12.jpg" alt="Image 2" class="img-fluid">
                            </div>
    
                            <!-- Third image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client13.jpg" alt="Image 3" class="img-fluid">
                            </div>
    
                            <!-- Fourth image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client15.jpg" alt="Image 4" class="img-fluid">
                            </div>
    
                            <!-- Fifth image div -->
                            <div class="image-div">
                                <img src="vacancies/client16.jpg" alt="Image 5" class="img-fluid">
                            </div>
                        </div>
    
                        <!-- Fourth additional div -->
                       <div class="additional-div d-flex" style="margin-left:-8%">
                            <!-- First image div -->
                            <div class="image-div mr-3">
                                
                            </div>
    
                            <!-- Second image div -->
                            <div class="image-div mr-3">
                                
                            </div>
    
                            <!-- Third image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client17.jpg" alt="Image 3" class="img-fluid">
                            </div>
    
                            <!-- Fourth image div -->
                            <div class="image-div mr-3">
                                <img src="vacancies/client18.jpg" alt="Image 4" class="img-fluid">
                            </div>
    
                            <!-- Fifth image div -->
                            <div class="image-div">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    
    
    

    

    
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

    <!-- Additional Sections -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
