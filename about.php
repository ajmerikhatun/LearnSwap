<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Swap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        /* Custom CSS styles */
        body {
            background-color: #f0f8ff; /* Subtle background color */
        }
        .h-font {
        font-family: "Playwrite IT Moderna", cursive;
      }
        .container {
            max-width: 800px; /* Adjust as per your design */
            margin-top: 50px;
            margin-bottom: 50px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;

        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .header p {
            font-size: 1.2rem;
            color: #666;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        .section p {
            font-size: 1.1rem;
            color: #555;
        }
        .contact-link a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-link a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #000000ff;
            color: white;
            text-align: center;
            padding: 3rem 1rem;
            margin-top: 0;
            position: relative;
            width: 100%;
            min-height: 350px;
        }

        .footer-description {
            text-align: start;
            word-spacing: normal;
            margin-bottom: 5px;
            font-size: 17px; /* Adjusted font size */
            font-family: 'Poppins', sans-serif; /* Matching font style */
        }

        .container-footer {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: start;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .col {
            min-width: 250px;
            color: #f2f2f2f2;
            font-family: 'Poppins', sans-serif; /* Matching font style */
            padding: 0 2rem;
        }

        .col h3 {
            color: #ff014fff;
            margin-bottom: 20px;
            position: relative;
            cursor: pointer;
            font-size: 1.5rem; /* Adjusted font size */
        }

        .col h3::after {
            content: '';
            height: 3px;
            width: 0px;
            background-color: #ff014fff;
            position: absolute;
            bottom: 0;
            left: 0;
            transition: 0.3s ease;
        }

        .col h3:hover::after {
            width: 30px;
        }

        .col .social a i {
            color: #ff014fff;
            margin-top: 2rem;
            margin-right: 5px;
            transition: 0.3s ease;
        }

        .col .social a i:hover {
            transform: scale(1.5);
            filter: grayscale(25);
        }

        .col .links a {
            display: block;
            text-decoration: none;
            color: #f2f2f2;
            margin-bottom: 5px;
            position: relative;
            transition: 0.3s ease;
        }

        .col .links a::before {
            content: '';
            height: 16px;
            width: 3px;
            position: absolute;
            top: 5px;
            left: -10px;
            background-color: #ff014fff;
            transition: 0.5s ease;
            opacity: 0;
        }

        .col .links a:hover::before {
            opacity: 1;
        }

        .col .links a:hover {
            transform: translateX(-8px);
            color: #ff014fff;
        }

        .col .contact-details {
            display: flex;
            align-items: center;
            justify-content: start;
            text-align: left;
            word-spacing: normal;
            margin: 0;
            padding: 0 0 5px 0;
            line-height: 1.5;
        }

        .col .contact-details i {
            margin: 0;
            padding: 0 0 5px 0;
            line-height: 1.5;
            margin-right: 10px;
        }

        .row .form {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 0;
        }

        .row .form input {
            background-color: #1a1c20ff;
            border: 0;
            outline: none;
            padding: 14px 20px;
            border-radius: 6px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form button {
            padding: 14px 20px;
            border: 0;
            border-radius: 6px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            background-color: #ff014fff;
        }

        /* Responsive adjustments */
        @media (max-width: 900px) {
            .row {
                flex-direction: column;
            }
            .col {
                width: 100%;
                text-align: left;
                margin-bottom: 25px;
            }
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .col {
                width: 100%;
                text-align: left;
                margin-bottom: 20px;
            }
        }

    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand h-font">LearnSwap</a>
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav custom-margin me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home2.php">Home</a> 
        </li>

  <!-- Dropdown menu for Courses -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="courses.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

    <!-- Technology & Programming Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Technology & Programming</a>
            <ul class="dropdown-menu">
              <!-- <li><a class="dropdown-item" href="courses.php">Web Development</a></li> -->
              <li><a href="courses.php?course=web-development" class="dropdown-item">Web Development</a></li>
              <li><a href="courses.php?course=javascript" class="dropdown-item" href="courses.php">JavaScript</a></li>
              <li><a href="courses.php?course=python" class="dropdown-item" href="courses.php">Python</a></li>
              <li><a href="courses.php?course=machine-learning" class="dropdown-item" href="courses.php">Machine Learning</a></li>
            </ul>
        </li>
            
    <!-- Business & Finance Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Business & Finance</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php?course=entrepreneurship" class="dropdown-item" href="courses.php">Entrepreneurship</a></li>
              <li><a href="courses.php?course=personal-finance" class="dropdown-item" href="courses.php">Personal Finance</a></li>
              <li><a href="courses.php?course=investing" class="dropdown-item" href="courses.php">Investing</a></li>
              <li><a href="courses.php?course=digital-marketing" class="dropdown-item" href="courses.php">Digital Marketing</a></li>
            </ul>
        </li>

    <!-- Language & Communication Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Language & Communication</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php?course=spanish" class="dropdown-item" href="courses.php">Spanish</a></li>
              <li><a href="courses.php?course=public-speaking" class="dropdown-item" href="courses.php">Public Speaking</a></li>
              <li><a href="courses.php?course=content-writing" class="dropdown-item" href="courses.php">Content Writing</a></li>
              <li><a href="courses.php?course=sign-language" class="dropdown-item" href="courses.php">Sign Language</a></li>
            </ul>
        </li>
        
    <!-- Music & Performing Arts Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Music & Performing Arts</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php?course=guitar" class="dropdown-item" href="courses.php">Guitar</a></li>
              <li><a href="courses.php?course=vocal-training" class="dropdown-item" href="courses.php">Vocal Training</a></li>
              <li><a href="courses.php?course=acting" class="dropdown-item" href="courses.php">Acting</a></li>
              <li><a href="courses.php?course=dance" class="dropdown-item" href="courses.php">Dance</a></li>
            </ul>
        </li>

    <!-- Health & Wellness Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Health & Wellness</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php?course=yoga" class="dropdown-item" href="courses.php">Yoga</a></li>
              <li><a href="courses.php?course=meditation" class="dropdown-item" href="courses.php">Meditation</a></li>
              <li><a href="courses.php?course=cooking" class="dropdown-item" href="courses.php">Healthy Cooking</a></li>
              <li><a href="courses.php?course=stress-management" class="dropdown-item" href="courses.php">Stress Management</a></li>
            </ul>
        </li>

    <!-- Arts & Crafts Dropdown -->
        <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="courses.php">Arts & Crafts</a>
              <ul class="dropdown-menu">
                <li><a href="courses.php?course=drawing" class="dropdown-item" href="courses.php">Drawing</a></li>
                <li><a href="courses.php?course=watercolor-painting" class="dropdown-item" href="courses.php">Watercolor Painting</a></li>
                <li><a href="courses.php?course=diy-crafts" class="dropdown-item" href="courses.php">DIY Crafts</a></li>
                <li><a href="courses.php?course=graphic-design" class="dropdown-item" href="courses.php">Graphic Design</a></li>
              </ul>
        </li>
      </ul>
      </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a></li>
        </ul> 

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <button class="btn btn-danger" id="logout-button" onclick="window.location.href='logout.php'">Login</button>
<?php else: ?>
    <button class="btn btn-success" id="login-button" onclick="window.location.href='login.php'" style="margin-left: 810px;">Logout</button>
<?php endif; ?>


    </div>
    </div>
      <button class="btn btn-success shadow-none" type="submit" style=" display: none;">Logout</button>
  </nav>

    <!-- Main content -->
    <div class="container">
        <div class="header">
            <h1>About LearnSwap</h1>
            <p>LearnSwap is a community-driven platform designed to facilitate the sharing and learning of various skills among its members.</p>
        </div>

        <div class="section">
            <h2><i class="fas fa-bullseye"></i> Our Mission</h2>
            <p>Our mission is to create an inclusive environment where individuals can both teach and learn, fostering a culture of collaboration and continuous growth.</p>
        </div>

        <div class="section">
            <h2><i class="fas fa-lightbulb"></i> Our Vision</h2>
            <p>To empower individuals worldwide through accessible, quality education and skill development, promoting personal and professional advancement in diverse fields.</p>
        </div>

        <div class="section contact-link">
            <h2><i class="fas fa-envelope"></i> Contact Us</h2>
            <p>If you have any questions or feedback, please feel free to <a href="contact.php">contact us</a>. We'd love to hear from you!</p>
        </div>
    </div>

<!-- Footer -->
<footer>
        <div class="container-footer">
            <div class="row">
                <div class="col" id="company">
                    <h3>LearnSwap</h3>
                    <!-- <img src="images/logo.png" alt="" class="logo"> -->
                    <div class="footer-description">Welcome to LearnSwap. You learn, share, and grow.</div>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="col" id="services">
                    <h3>Online Platform</h3>
                    <div class="links">
                        <a href="about.php">About</a>
                        <a href="courses.php">Courses</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>

                <div class="col" id="useful-links">
                    <h3>Links</h3>
                    <div class="links">
                        <a href="faq.php">FAQ's</a>
                        <a href="login.php">Sign In/Registration</a>
                        <a href="instructor.php">Instructors</a>
                    </div>
                </div>

                <div class="col" id="contact">
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <i class="fa fa-location"></i>
                        <div class="footer-description">Mahatma Gandhi Road, Mumbai, 400069, India</div>
                    </div>
                    <div class="contact-details">
                        <i class="fa fa-phone"></i>
                        <div class="footer-description">+1-8755856858</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>
