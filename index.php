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
        
      .h-font {
        font-family: "Playwrite IT Moderna", cursive;
      }

      p {
        text-align: justify;
        font-family: 'Poppins';
        font-size: 20px;
      }
      
      .banner {
          position: relative;
          background: url(./images/logo2.png) no-repeat center center;
          background-size: cover; 
          height: 700px;
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          text-align: center;
          z-index: 1;
      }

      .card-title {
        font-size: 1.50rem; /* Adjust as needed */
        font-weight: 600; /* Adjust font weight */
        text-align: center;
    }

    .card-text {
        font-size: 1.25rem; /* Adjust as needed */
        color: #666; /* Optional: Adjust text color */
        text-align: center;
    }

    .list-group-item {
        font-size: 1.15rem; /* Adjust as needed */
        color: #888; /* Optional: Adjust text color */
        text-align: center;
        /* margin-bottom: 10px; */
    }

    .explore-btn {
    display: block;
    width: fit-content;
    margin: 0 auto;
}

      .hero {
  background: url('./images/4.png') no-repeat center center/cover;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  color: white;
  text-align: left;
}

      .hero-content {
        max-width: 600px;
        /* text-align: left; */
        margin-left: 50px;
      }

.hero-btn {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.hero-btn:hover {
  background-color: none;
}

.features {
  padding: 50px 0;
  text-align: center;
}

.feature-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
}

.feature-item {
  flex: 1 1 calc(25% - 20px);
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.feature-item i {
  font-size: 50px;
  color: #007bff;
  margin-bottom: 10px;
}

.testimonials {
  padding: 50px 0;
  background-color: #333;
  color: white;
  text-align: center;
}

.testimonials h2 {
  font-size: 30px; /* Increase the font size */
  color: #ffcc00; /* Change the text color to make it stand out */
  margin-bottom: 20px; /* Add some margin to separate it from the content below */
  text-transform: uppercase; /* Optionally, transform the text to uppercase */
}

.testimonial-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
}

.testimonial-item {
  flex: 1 1 calc(50% - 20px);
  background-color: #444;
  padding: 20px;
  border-radius: 10px;
}

.cta {
  padding: 50px 0;
  background-color: #007bff;
  color: white;
  text-align: center;
}

.cta-btn {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #0056b3;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.cta-btn:hover {
  background-color: lightcyan;
}


      footer {
        background-color: #343a40; 
        color: white; 
        text-align: center;
        padding: 10px 0; 
        margin-top: 0; /* Ensures there's space between the footer and content above */
        position: relative; /* Ensures it's within the document flow */
        z-index: 0;
      }

      @media (min-width: 575px) {
      .newsletter-form {
        display: flex;
        align-items: center;
        gap: 10px;
        }
      }

      .newsletter-form {
        margin-block: 20px 35px;
      }

      *, *::before, *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      form {
        display: block;
        margin-top: 0em;
        unicode-bidi: isolate;
      }

      #hello{
        transition: 0.4s;
      }

      #hello:hover{
        transform: translateY(-10px);
        box-shadow: 0px 0px 10px black;
      }

      *{
        box-sizing: border-box;
        margin:0;
        padding:0;  
      }

      body, html{
        height: 100%;
        overflow-x: hidden;
      }

      footer{
        background-color: #000000ff;
        position: relative;
        width: 100%;
        min-height: 350px;
        padding: 3rem 1rem;
      }

      .footer-description {
        text-align: start; 
        word-spacing: normal; 
        width: 100%; /* Ensures the container takes full width */
        margin-bottom: 5px;
      }

      .container {
        max-width: 1140px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: start;
      }

      .row{
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .col{
        min-width: 250px;
        color:#f2f2f2f2;
        font-family: poppins;
        padding:0 2rem;
      }

      #company, #services {
        width: 100%;
      }

      #company h3, #services h3 {
        color: #ff014fff;
        margin-bottom: 20px;
        position: relative;
        cursor: pointer;
      }

      #company .footer-description, #services .links {
        text-align: start;
        word-spacing: normal;
        margin-bottom: 5px;
      }

      .col .logo{
        width: 100px;
        margin-bottom:25px;
      }

      .col h3{
        color:#ff014fff;
        margin-bottom: 20px;
        position: relative;
        cursor: pointer;
      }

      .col h3::after{
        content: '';
        height:3px;
        width:0px;
        background-color: #ff014fff;
        position: absolute;
        bottom: 0;
        left:0;
        transition: 0.3s ease;
      }

      .col h3:hover::after{
        width:30px
      }

      .col .social a i{
        color:#ff014fff;
        margin-top:2rem;
        margin-right: 5px;
        transition: 0.3s ease;
      }

      .col .social a i:hover{
        transform: scale(1.5);
        filter:grayscale(25);
      }

      .col .links a{
        display: block;
        text-decoration: none;
        color:#f2f2f2;
        margin-bottom: 5px;
        position: relative;
        transition: 0.3s ease;
      }

      .col .links a::before{
        content:'';
        height: 16px;
        width:3px;
        position: absolute;
        top:5px;
        left:-10px;
        background-color: #ff014fff;
        transition: 0.5s ease;
        opacity: 0;
      }

      .col .links a:hover::before{
        opacity: 1;
      }

      .col .links a:hover{
        transform: translateX(-8px);
        color:#ff014fff;
      }

      .col .contact-details {
        display: flex;
        align-items: center;
        justify-content: start;
        text-align: left;
        word-spacing: normal;
        margin: 0; /* Removes default margin */
        padding: 0 0 5px 0; /* Adds padding to space out lines */
        line-height: 1.5; /* Ensures proper line spacing */
      }

      .col .contact-details i{
        margin: 0; 
        padding: 0 0 5px 0; 
        line-height: 1.5; 
        margin-right: 10px;
      }

      .row .form{
        display: flex;
        justify-content: center;
        align-items: center;
        padding:2rem 0;
      }

      .row .form input{
        background-color: #1a1c20ff;
        border:0;
        outline:none;
        padding:14px 20px;
        border-radius: 6px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .form button{
        padding:14px 20px;
        border:0;
        border-radius: 6px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        background-color: #ff014fff;
      }

      @media(max-width:900px){
        .row{
          flex-direction: column;
        }
        .col{
          width: 100%;
          text-align: left;
          margin-bottom: 25px;
        }
      }

      @media(max-width:768px){
        .row{
          flex-direction: column;
        }
        .col{
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
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
      <!-- </button> -->

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

<!-- banner -->
    <div class="banner"></div>
      <h2 class="text-center my-5 h-font">Pick A Course To Get Started</h2>
<!-- card section -->
    <div class="row justify-content-center">
      <div class="card mx-4" style="width: 25rem;" id="hello">
        <img src="images/2206.jpg" class="card-img-top card-img-square" alt="Web Development">
        <div class="card-body">
        <h3 class="card-title">Web Development</h3>
          <p class="card-text">Learn the fundamentals of web development and build websites.</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Duration: 12 hours</li>
          <li class="list-group-item">Level: Advanced</li>
          <li class="list-group-item">Instructor: James Lee</li>
          <li class="list-group-item">Rating: 4.5</li>
          <li class="list-group-item">Students Enrolled: 500+</li>
        </ul>
        <a href="courses.php?course=web-development" class="btn btn-primary mt-3 explore-btn">Explore Course</a>
        </div>
      </div>

      <div class="card mx-4" style="width: 25rem;" id="hello">
        <img src="images/2.jpg" class="card-img-top card-img-square" alt="Graphic Design">
        <div class="card-body">
        <h3 class="card-title">Graphic Design</h3>
          <p class="card-text">Learn to create stunning visuals and design principles.</p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Duration: 10 hours</li>
          <li class="list-group-item">Level: Intermediate</li>
          <li class="list-group-item">Instructor: Lisa Anderson</li>
          <li class="list-group-item">Rating: 4.8</li>
          <li class="list-group-item">Students Enrolled: 700+</li>
        </ul>
        <a href="courses.php?course=graphic-design" class="btn btn-primary mt-3 explore-btn">Explore Course</a>
        </div>
      </div>

      <div class="card mx-4" style="width: 25rem;" id="hello">
        <img src="images/3.png" class="card-img-top card-img-square" alt="Creative Writing">
        <div class="card-body">
        <h3 class="card-title">Content Writing</h3>
          <p class="card-text">Unlock your creativity through writing stories, poetry, and more.</p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Duration: 8 hours</li>
          <li class="list-group-item">Level: Beginner</li>
          <li class="list-group-item">Instructor: Dr. Paul</li>
          <li class="list-group-item">Rating: 4.3</li>
          <li class="list-group-item">Students Enrolled: 400+</li>
        </ul>
        <a href="courses.php?course=content-writing" class="btn btn-primary mt-3 explore-btn">Explore Course</a>
        </div>
      </div>
    </div>

    <h1 class="px-5 text-center mt-5 h-font">Discover. Learn. Share.</h1>
    <p class="px-5 text-justify mt-5">Welcome to LearnSwap, your ultimate destination for discovering, learning, and sharing skills within your community. Whether you're eager to master a new hobby, advance your professional skills, or share your expertise, LearnSwap is the perfect platform for you. Dive into a diverse range of courses created by community members, covering everything from technology and arts to wellness and business. Our interactive learning environment includes video tutorials, quizzes, and discussion forums to enhance your experience. Join us today to connect with like-minded individuals, grow your knowledge, and contribute to a vibrant community of learners and mentors. Start your journey with LearnSwap and unlock endless opportunities for personal and professional growth. Sign up now and be part of a community that values learning and sharing!</p>

    <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Why LearnSwap?</h1>
      <p>Discover a community-driven platform that empowers you to share and learn skills seamlessly. Join LearnSwap today and become part of a thriving community dedicated to learning and skill sharing.
</p>
      <a href="#features" class="hero-btn">Learn More</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features">
    <div class="container">
      <h2>Our Features</h2>
      <div class="feature-grid">
        <div class="feature-item">
          <i class="fas fa-users"></i>
          <h3>Community Driven</h3>
          <p>Join a community of learners and educators.</p>
        </div>
        <div class="feature-item">
          <i class="fas fa-chalkboard-teacher"></i>
          <h3>Expert Instructors</h3>
          <p>Learn from industry experts and skilled professionals.</p>
        </div>
        <div class="feature-item">
          <i class="fas fa-share-alt"></i>
          <h3>Easy Sharing</h3>
          <p>Share your knowledge with ease.</p>
        </div>
        <div class="feature-item">
          <i class="fas fa-certificate"></i>
          <h3>Certifications</h3>
          <p>Earn certificates to showcase your skills.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="container">
      <h2>What Our Users Say</h2>
      <div class="testimonial-grid">
        <div class="testimonial-item">
          <p>"LearnSwap has changed the way I learn new skills. The community is fantastic!"</p>
          <h4>- Jane Doe</h4>
        </div>
        <div class="testimonial-item">
          <p>"Sharing my knowledge on LearnSwap has been a rewarding experience."</p>
          <h4>- John Smith</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta">
    <div class="container">
      <h2>Want to share your knowledge?</h2>
      <a href="share.php" class="cta-btn">Share Course</a>
    </div>
  </section>
    
<!-- Footer -->
<footer>
        <div class="container">
            <div class="row">
                  <div class="col" id="company">
                    <h3>LearnSwap</h3>
                      <!-- <img src="images/logo.png" alt="" class="logo"> -->
                      <div class="footer-description">Welcome to LearnSwap. You learn, share and grow. </div>
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
                         <div class="footer-description">Mahatma Gandhi Road, Mumbai, 400069, India </div>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                          <div class="footer-description">
                          +1-8755856858
                          </div>
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
  // Script to enable nested dropdowns
  document.addEventListener('DOMContentLoaded', function() {
    var dropdowns = document.querySelectorAll('.dropdown-submenu .dropdown-toggle');
      dropdowns.forEach(function(dropdown) {
      dropdown.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      var nextEl = this.nextElementSibling;
        if (nextEl && nextEl.classList.contains('dropdown-menu')) {
          nextEl.classList.toggle('show');
          dropdowns.forEach(function(dd) {
            if (dd !== dropdown && dd.nextElementSibling !== nextEl) {
            dd.nextElementSibling.classList.remove('show');
            }
          });
        }
      });
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
