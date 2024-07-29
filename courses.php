<?php
// Initialize $course_title and $video_id
$course_title = '';
$video_id = null;

// Check if course parameter is set and not empty
if (isset($_GET['course']) && !empty($_GET['course'])) {
    $course = $_GET['course'];

    // Load course content based on $course
    switch ($course) {
        case 'web-development':
            $course_title = 'Web Development';
            $video_id = 'HVjjoMvutj4';
            break;
        case 'javascript':
            $course_title = 'JavaScript';
            $video_id = 'Kdz9J5vC4_o';
            break;
        case 'python':
            $course_title = 'Python';
            $video_id = 'UrsmFxEIp5k';
            break;
        case 'machine-learning':
            $course_title = 'Machine Learning';
            $video_id = 'GwIo3gDZCVQ';
            break;
        case 'entrepreneurship':
            $course_title = 'Entrepreneurship';
            $video_id = 'UEngvxZ11sw';
            break;
        case 'personal-finance':
            $course_title = 'Personal Finance';
            $video_id = 'JL0NhCj4tyc';
            break;
        case 'investing':
            $course_title = 'Investing';
            $video_id = 'Zj3ZArkn1sI';
            break;
        case 'digital-marketing':
            $course_title = 'Digital Marketing';
            $video_id = 'DzyOpJpV6F0';
            break;
        case 'spanish':
            $course_title = 'Spanish';
            $video_id = 'Xo5Y7AHMy20';
            break;
        case 'public-speaking':
            $course_title = 'Public Speaking';
            $video_id = 'savwVzZh5go';
            break;
        case 'content-writing':
            $course_title = 'Content Writing';
            $video_id = 'J2h0Xb0WNwQ';
            break;
        case 'sign-language':
            $course_title = 'Sign Language';
            $video_id = 'sLqdPipf1UM';
            break;
        case 'guitar':
            $course_title = 'Guitar';
            $video_id = 'w-Zt5Kbf3TM';
            break;
        case 'vocal-training':
            $course_title = 'Vocal Training';
            $video_id = 'jog-nfLldRI';
            break;
        case 'acting':
            $course_title = 'Acting';
            $video_id = 'Fh2ouhh0ITw';
            break;
        case 'dance':
            $course_title = 'Dance';
            $video_id = 'g0KhDbPKt6A';
            break;
        case 'yoga':
            $course_title = 'Yoga';
            $video_id = 'FdyhENXyIQ4';
            break;
        case 'meditation':
            $course_title = 'Meditation';
            $video_id = 'CDnEKUDNwMM';
            break;
        case 'cooking':
            $course_title = 'Cooking';
            $video_id = 'R3k1Z0oKHIQ';
            break;
        case 'stress-management':
            $course_title = 'Stress Management';
            $video_id = 'JjOegSqBCtk';
            break;
        case 'drawing':
            $course_title = 'Drawing';
            $video_id = '1jjmOF1hQqI';
            break;
        case 'watercolor-painting':
            $course_title = 'Watercolor Painting';
            $video_id = 'tDdfPMTX15Y';
            break;
        case 'diy-crafts':
            $course_title = 'DIY Crafts';
            $video_id = 'SF71ks5FrKQ';
            break;
        case 'graphic-design':
            $course_title = 'Graphic Design';
            $video_id = 'C9YfPNW_gpQ';
            break;
        default:
            // Handle unknown courses or fallback
            $course_title = 'Course Not Found';
            break;
    }
}
?>

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
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .h-font {
        font-family: "Playwrite IT Moderna", cursive;
      }
    
        header, footer {
            color: white;
            padding: 10px 0;
            text-align: center;
            position: relative;
            padding: 0.1em;
        }
        


        .hero {
            background-image: url('images/7.png');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 70px 0;
            width: auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin: 0 auto;
            border: 5px solid #ddd;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .content {
            text-align: center;
            margin: 20px 0;
        }

        .course-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
           
        }

        .card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
            text-align: center;
            width: 300px;
            width: calc(33.33% - 40px); /* Ensures three cards per row with a 20px gap */
            margin-bottom: 20px; 
            margin: 10px;
            margin-top: 0px;
        }

        .card img {
            width: 100%;
            height: 65%;
            display: block;
        }

        .card h3 {
            margin: 15px 0;
        }

        .card p {
            padding: 0 15px;
            font-size: 16px; /* Adjust font size for readability */
            line-height: 1.3;
        }

        .card a {
            display: block;
            background: #333;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .card a:hover {
            background: #555;
        }

        .course-navigation ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .course-navigation ul li {
            display: inline-block;
            margin: 10px;
        }

        .course-navigation ul li a {
            text-decoration: none;
            color: #333;
            background: #f1f1f1;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .course-navigation ul li a:hover {
            background: #ddd;
        }

        .search-bar {
            text-align: center;
            margin: 20px 0;
        }

        .search-bar input {
            padding: 10px;
            width: 80%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    <header>
      
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
    </header>
    
    <main class="container">
        <div class="hero">
            <h1>Welcome to Our Community Skill Sharing Platform</h1>
            <p>Learn new skills, share your knowledge, and grow together!</p>
        </div>
        
        <div class="content">
            <h2><?php echo $course_title; ?></h2>
            <?php if ($video_id): ?>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            
            <?php endif; ?>
            
            <!-- Course Navigation Links -->
            <?php if (!isset($_GET['course']) || empty($_GET['course'])): ?>
                <h2>Popular Courses</h2>
                <div class="course-cards">
                    <div class="card">
                        <img src="images/2206.jpg" alt="Web Development">
                        <h3>Web Development</h3>
                        <p>Learn to build responsive websites using HTML, CSS, and JavaScript. This course is designed to teach full-stack development and deevlop projects.</p>
                        <a href="courses.php?course=web-development">Start Learning</a>
                    </div>
                    <div class="card">
                        <img src="images/js.jpg" alt="JavaScript">
                        <h3>JavaScript</h3>
                        <p>Master the language of the web. This course covers basic to advanced concepts like closures, prototypes, and asynchronous programming, with projects.</p>
                        <a href="courses.php?course=javascript">Start Learning</a>
                    </div>
                    <!-- Add more popular courses in a similar way -->
                </div>
                
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search for a course...">
                </div> -->
                
                <div class="course-navigation">
                    <ul>
                        <li><a href="courses.php?course=web-development"><i class="fas fa-code"></i> Web Development</a></li>
                        <li><a href="courses.php?course=javascript"><i class="fab fa-js-square"></i> JavaScript</a></li>
                        <li><a href="courses.php?course=python"><i class="fab fa-python"></i> Python</a></li>
                        <li><a href="courses.php?course=machine-learning"><i class="fas fa-robot"></i> Machine Learning</a></li>
                        <li><a href="courses.php?course=entrepreneurship"><i class="fas fa-lightbulb"></i> Entrepreneurship</a></li>
                        <li><a href="courses.php?course=personal-finance"><i class="fas fa-wallet"></i> Personal Finance</a></li>
                        <li><a href="courses.php?course=investing"><i class="fas fa-chart-line"></i> Investing</a></li>
                        <li><a href="courses.php?course=digital-marketing"><i class="fas fa-bullhorn"></i> Digital Marketing</a></li>
                        <li><a href="courses.php?course=spanish"><i class="fas fa-language"></i> Spanish</a></li>
                        <li><a href="courses.php?course=public-speaking"><i class="fas fa-microphone"></i> Public Speaking</a></li>
                        <li><a href="courses.php?course=content-writing"><i class="fas fa-pen"></i> Content Writing</a></li>
                        <li><a href="courses.php?course=sign-language"><i class="fas fa-sign-language"></i> Sign Language</a></li>
                        <li><a href="courses.php?course=guitar"><i class="fas fa-guitar"></i> Guitar</a></li>
                        <li><a href="courses.php?course=vocal-training"><i class="fas fa-microphone-alt"></i> Vocal Training</a></li>
                        <li><a href="courses.php?course=acting"><i class="fas fa-theater-masks"></i> Acting</a></li>
                        <li><a href="courses.php?course=dance"><i class="fas fa-dance"></i> Dance</a></li>
                        <li><a href="courses.php?course=yoga"><i class="fas fa-yoga"></i> Yoga</a></li>
                        <li><a href="courses.php?course=meditation"><i class="fas fa-meditation"></i> Meditation</a></li>
                        <li><a href="courses.php?course=cooking"><i class="fas fa-utensils"></i> Cooking</a></li>
                        <li><a href="courses.php?course=stress-management"><i class="fas fa-spa"></i> Stress Management</a></li>
                        <li><a href="courses.php?course=drawing"><i class="fas fa-pencil-alt"></i> Drawing</a></li>
                        <li><a href="courses.php?course=watercolor-painting"><i class="fas fa-paint-brush"></i> Watercolor Painting</a></li>
                        <li><a href="courses.php?course=diy-crafts"><i class="fas fa-hands"></i> DIY Crafts</a></li>
                        <li><a href="courses.php?course=graphic-design"><i class="fas fa-palette"></i> Graphic Design</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </main>
    
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
    <script>
document.getElementById('search-input').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const description = card.querySelector('p').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>
