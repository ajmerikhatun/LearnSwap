<?php
session_start();


// Include the database configuration file
require_once 'config.php';

// Define variables and initialize with empty values
$name = $email = $password = $confirm_password = "";
$name_err = $email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        } else {
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE email = ?";

            if ($stmt = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_email);

                // Set parameters
                $param_email = $email;

                // Attempt to execute the prepared statement
                if ($stmt->execute()) {
                    // Store result
                    $stmt->store_result();

                    if ($stmt->num_rows == 1) {
                        $email_err = "This email is already taken.";
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                $stmt->close();
            }
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_name, $param_email, $param_password);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - LearnSwap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>
      .h-font{
        font-family: "Playwrite IT Moderna", cursive;
      }
      p{
        text-align: justify;
      }   
      .container {
        background-color: rgba(0, 0, 0, 0.1);
      }
    </style>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand h-font" href="home2.php">LearnSwap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
              <li><a href="courses.php?course=nutrition" class="dropdown-item" href="courses.php">Nutrition</a></li>
              <li><a href="courses.php?course=mental-health" class="dropdown-item" href="courses.php">Mental Health</a></li>
              <li><a href="courses.php?course=fitness" class="dropdown-item" href="courses.php">Fitness</a></li>
            </ul>
        </li>
        
    <!-- Art & Design Dropdown -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="courses.php">Art & Design</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php?course=graphic-design" class="dropdown-item" href="courses.php">Graphic Design</a></li>
              <li><a href="courses.php?course=painting" class="dropdown-item" href="courses.php">Painting</a></li>
              <li><a href="courses.php?course=photography" class="dropdown-item" href="courses.php">Photography</a></li>
              <li><a href="courses.php?course=interior-design" class="dropdown-item" href="courses.php">Interior Design</a></li>
            </ul>
        </li>
    </ul>
  </li>

        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<!-- end navbar -->

    <div class="container w-25 border py-5 mt-5 rounded shadow">
        <h2 class="text-center">Create Your Account</h2>
        <?php 
        if (!empty($name_err) || !empty($email_err) || !empty($password_err) || !empty($confirm_password_err)) {
            echo '<div class="alert alert-danger">' . $name_err . '<br>' . $email_err . '<br>' . $password_err . '<br>' . $confirm_password_err . '</div>';
        }        
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($password); ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo htmlspecialchars($confirm_password); ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary mt-3" value="Register">
            </div>
            <div class="text-center mt-4">
                
            </div>
        </form>
    </div>
    <!-- Your existing scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('input[name="email"]').value = '';
        document.querySelector('input[name="password"]').value = '';
    });

</script>
</body>
</html>
