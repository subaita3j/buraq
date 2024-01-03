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
        background-color:white;
    }

    .navbar-toggler-icon {
        border: none;
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

    .content h3 {
        color: #4f6268;
        text-align: center;
        padding: 3%;
        font-size: 4vw;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        margin-right: 50%;
        margin-top: -40%;
        border-radius: 20px;
        margin-left: 5%;
        background: rgba(255, 255, 255, 0.69);
        box-shadow: 4px 3px 9px 0px #2d2d2d;
    }

    .tech {
        color: #4f6268;
        text-align: center;
        font-family: Roboto Condensed;
        font-size: 5vw;
        font-style: normal;
        font-weight: 700;
        line-height: 100%;
    }

    #hero {
        position: relative;
        z-index: 1;
        margin-top: -70px;
    }

    #hero img {
        width: 100%;
        height: auto;
    }

    .image-container {
        position: absolute;
        top: 50%;
        left: 90%;
        transform: translate(-50%, -50%);
        z-index: 3;
        display: flex;
        flex-direction: column; /* Adjusted for vertical stack */
        align-items: center;
        margin-top: 2%; /* Center the images horizontally */
    }

    .image-wrapper {
        position: relative;
        margin: 10%;
    }

    .image-wrapper img {
        width: 50px; /* Adjust the size as needed */
        height: auto;
        border-radius: 50%;
        margin-bottom: 10px;
        cursor: pointer;
        /* Adjusted for spacing between images */
        animation: popUpAndDown 1s infinite alternate ease-in-out;
        transition: transform 0.3s ease-in-out;
        position: relative;
    }

    .popup-message {
        position: absolute;
        color:black;
        background: rgba(255, 255, 255, 0.8);
        padding: 10px;
        border-radius: 20px;
        display: none;
        z-index: 999;
        white-space: nowrap;
        top: 0;
        left: 0;
        transform: translate(-100%, -50%);
    }

    .image-wrapper img:hover {
        transform: scale(1.2); /* Increase size on hover */
    }

    .image-wrapper img:hover + .popup-message {
        display: block;
    }

    @keyframes popUpAndDown {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-10px);
        }
    }

    @media (max-width: 768px) {
        .navbar-brand img {
            max-width: 50px;
        }

        .nav-item img {
            max-width: 30px;
        }
    }

    .card-container {
      position: relative;
      max-width: 1000px;
      margin: 0 auto;
      z-index: 1;
    }

    .card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 70%; /* Adjust the width as needed */
      max-width: 1000px; /* Set a max-width to prevent the card from becoming too wide */
      height: auto; /* Adjust the height as needed */
      padding: 20px; /* Add padding for better spacing */
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 2;
      background-color:lightgrey;
    }

    /* Default styles */
.card-title,
.card-text
 {
  font-size: 3vw; /* Adjust as needed */
}
.btn {
    font-size: 2vw;
    background-color:darkblue;
    border:1px solid darkblue;
    border-radius:50px;
    padding-left:30px;
    padding-right:30px;
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

.card {
  width: 80%; /* Adjust as needed */
  margin: 0 auto;
}

.image-container1 {
      position: relative;
      margin-left:80%;
      margin-top:-15%;
      width:30%;
      
      
    


    }


    .image-container1 img {
      position: absolute;
      top: 0;
      left: 0;
      width: 90%;
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

 
  
  #jobsCount h2, #clientsCount h2, #reviewsCount h2 {
                font-size: 40px;
                color:white;
            }

  @media (max-width: 576px) {
            #jobsCount h5, #clientsCount h5, #reviewsCount h5 {
                font-size: 12px;
            }
        }

        .bg-primary h5, .bg-success h5, .bg-warning h5 {
            font-size: 12px;
            color: white;
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
            font-size: 8px !important;
        }

        .small-text {
            font-size: 8px !important;
        }
    }

    h4 {
        z-index:99;
    }

   

        

</style>

<body >
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
                    <ul class="navbar-nav  ms-auto mb-5 mb-lg-0">
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

   

    <section id="hero">
        <div class="hey">
            <div class="row">
                <img src="./buraq/buraq.png" class="img-fluid" alt="Hero Image">
                <div class="content">
                    <h3>djosivvdj ovjdsovdew <span style="color:red; text-bold;">djsoiffj</span>fghj <span style="color:yellow">dhjkj</span>dfhsie ioadf </h3>
                </div>
            </div>
            <div class="image-container" style="width:5%">
                <div class="image-wrapper">
                    <img src="buraq/tele.png" alt="Image 1" class="img-fluid">
                    <div class="popup-message">+91 8364251195</div>
                </div>
                <!-- Add the overlapping div here -->
                
                <!-- End overlapping div -->
                <div class="image-wrapper">
                    <img src="buraq/phone.png" alt="Image 2" class="img-fluid">
                    <div class="popup-message">+91 845120154</div>
                </div>
                <div class="image-wrapper">
                    <img src="buraq/message.png" alt="Image 3" class="img-fluid">
                    <div class="popup-message">buraqconsultancy01@gmail.com</div>
                </div>
                <div class="image-wrapper">
                    <img src="buraq/location.png" alt="Image 4" class="img-fluid">
                    <div class="popup-message"> fxt hanxg <br/>
                    Karnataka India</div>
                </div>
            </div>
        </div>
    </section>

    <div class="card-container">
        <div class="row">
          <div class="col-md-12 mx-auto mt-5">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">We are authenticate</h5>
                <p class="card-title">Hi, I am a coder.</p>
                <p class="card-title">Hi, I am a coder.</p>
                <!-- Add the button after paragraphs -->
                <a href="#" class="btn btn-primary">Explore More ></a>
              </div>

              <div class="container-fluid">
                <div class="row">
                  
                    <div class="image-container1">
                      <img src="./buraq/hand1.png" alt="First Image" class="img-fluid">
                      <img class="second-image img-fluid" src="./buraq/hand.png" alt="Second Image">
                    </div>
                  
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 26%; ">
        <div class="row no-gutters">
            <div class="col">
                <div id="jobsCount" class=" p-3 mb-3" style="height: 100px; background-color: grey; border-radius: 10px;" >
                    <h2>0 JOBS</h2>
                </div>
            </div>

            <div class="col translate-div">
                <div id="clientsCount" class="p-3 mb-3" style="height: 100px; background-color: grey; border-radius: 10px;" >
                    <h2>0 CLIENTS</h2>
                </div>
            </div>

            <div class="col translate-div1">
                <div id="reviewsCount" class="p-3 mb-3" style="height: 100px; background-color: grey; border-radius: 10px; ">
                    <h2>0 REVIEWS</h2>
                </div>
            </div>
        </div>
    </div>
<br>
<br>

    <a href="#" class="btn btn-primary" style="background-color:black; float:right; margin-top:10%; ">Know More ></a>

  
    
    <section style="background-color:white; margin-top:20%">
        <div style="width:20%; background-color:darkblue">
            <p font-size: 2.4vw;>TRUSTED BY</p>
        </div>
    <div class="container" style="text-align:center">
        <div class="row">
            <div class="col-4">
                <div class="image-container5">
                    <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                    <img src="./buraq/k.png" class="img-fluid" alt="Image 1">
                    
                </div>
            </div>
            <div class="col-4">
                <div class="image-container5">
                    <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                    <img src="./buraq/s.png" class="img-fluid" alt="Image 1">
                    
                </div>
            </div>
            <div class="col-4">
                <div class="image-container5">
                    <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                    <img src="./buraq/qu.png" class="img-fluid" alt="Image 1">
                    
                </div>
            </div>
        </div>
    </div>
  
  
    <div class="container" style=" text-align:center">
      <div class="row">
          <div class="col-4">
              <div class="image-container5">
                <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                <img src="./buraq/o.png" class="img-fluid" alt="Image 1">
                
              </div>
          </div>
          <div class="col-4">
              <div class="image-container5">
                <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                <img src="./buraq/q.png" class="img-fluid" alt="Image 1">
                 
              </div>
          </div>
          <div class="col-4">
              <div class="image-container5">
                <h5 style="color: black; font-size: 2.4vw;">KAZAKISTAN</h5>
                <img src="./buraq/qu.png" class="img-fluid" alt="Image 1">
                 
              </div>
          </div>
      </div>
  </div>
  
  <a href="#" class="btn btn-primary" style="float:right">Explore More ></a>
 
  </section>
  <BR>
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

  
    <script>
        function countUp(target, start, end, duration) {
            let current = start;
            const increment = (end - start) / duration;
            const element = document.getElementById(target);
    
            const timer = setInterval(() => {
                current += increment;
                element.textContent = Math.round(current) + (target === 'jobsCount' ? ' +JOBS' : (target === 'clientsCount' ? ' + CLIENTS' : '+ REVIEWS'));
    
                if (current >= end) {
                    clearInterval(timer);
                    element.textContent = end + (target === 'jobsCount' ? ' +JOBS' : (target === 'clientsCount' ? ' + CLIENTS' : ' + REVIEWS'));
                }
            }, 1000 / 60);
        }
    
        function handleIntersection(entries, observer, target, start, end, duration) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(target, start, end, duration);
                    // You can choose whether to unobserve or keep observing for repeated counting
                    // observer.unobserve(entry.target);
                }
            });
        }
    
        const observerOptions = { threshold: 0.5 };
        const observerJobs = new IntersectionObserver(entries => handleIntersection(entries, observerJobs, 'jobsCount', 0, 150, 100), observerOptions);
        const observerClients = new IntersectionObserver(entries => handleIntersection(entries, observerClients, 'clientsCount', 0, 100, 100), observerOptions);
        const observerReviews = new IntersectionObserver(entries => handleIntersection(entries, observerReviews, 'reviewsCount', 0, 100, 100), observerOptions);
    
        observerJobs.observe(document.getElementById('jobsCount'));
        observerClients.observe(document.getElementById('clientsCount'));
        observerReviews.observe(document.getElementById('reviewsCount'));
    </script>
    
      
      
      
      
      
      
      
      
      <script>
    function redirectOnChange(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex].text;
        if (selectedOption === "User") {
            window.location.href = "login.php";
        } else if (selectedOption === "Admin") {
            window.location.href = "login1.php";
        }
    }
</script>

   
    

    <!-- Additional Sections -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
