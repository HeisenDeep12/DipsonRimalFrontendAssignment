<?php
// Database connection settings
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecommerce';

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Start session
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

// Handle registration
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['c-password'];

    if ($password === $cpassword) {
        $qry = "INSERT INTO users VALUES (null, '$name', '$email', '$mobile', '$username', '$password', 'customer', 1)";
        
        if (!$conn->query($qry)) {
            die('Error: ' . $conn->error);
        }

        echo '<script>alert("User Registered Successfully")</script>';
    } else {
        echo "<script>alert('Passwords do not match!')</script>";
    }
}

// Handle login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $data = $conn->query($qry);

    if ($data->num_rows > 0) {
        $user = $data->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['usertype'] = $user['type'];
        header('location: index.php');
        echo '<script>alert("User Logged in Successfully!!!")</script>';
    } else {
        echo "<script>alert('Wrong Credentials!!!')</script>";
    }
}

 // Handle newsletter form submission
if(isset($_POST['newsletter_submit'])) {
    $email = $_POST['email_id'];

    // Insert the email into the database
    $sql = "INSERT INTO newsletters (email) VALUES ('$email')";

    if($conn->query($sql) === TRUE) {
        echo "<script>window.localStorage.setItem('email_id', '$email');</script>"; // Store email in localStorage
        echo "<script>alert('Email saved successfully!');</script>"; // Confirm successful storage
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>






<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ADA Clothes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
       (function(){
          emailjs.init("3hcbg_dmpmUKAn_eu");
       })();
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./images/Black_logo-removebg-preview.png" alt="Logo" class="logo-img">
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop/shop.php">Shop</a></li>
            <li><a href="Blog/blog.php">Blog</a></li>
            <li><a href="About us/about.php">About us</a></li>
            <li><a href="Contact us/contact.php">Contact Us</a></li>
        </ul>
        <div class="ls-btn">
            

        

<?php 
if(isset($_SESSION['username'])) {
?>   
<a href="profile.php" class="text-decoration-none text-warning">Profile</a>
<a href="logout.php" class="text-decoration-none text-warning ms-3">Logout</a>

<?php } else { ?>
<a href="login.php" class="text-decoration-none text-warning">Login</a>
<a href="register.php" class="text-decoration-none text-warning ms-3">Sign Up</a>
<?php } ?>


<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close login-close">&times;</span>
        <h2>Login</h2>
        <form method="post" class="col-md-4 offset-md-4 mt-5">
                
                <h3 class="text-center mb-3">User Login</h3>

                <div class="form-group mb-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required maxlength="10">
                </div>

                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required minlength="5">
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" 
                    name="login" value="Login">
                </div>

            </form>
    </div>
</div>


<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close signup-close">&times;</span>
        <h2>Sign Up</h2>
        <form method="post" class="col-md-4 offset-md-4 mt-5">
                
                <h3 class="text-center mb-3">User Registration</h3>

                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Mobile</label>
                    <input type="text" class="form-control" name="mobile" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required maxlength="10">
                </div>

                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required minlength="6">
                </div>

                <div class="form-group mb-3">
                    <label for="">Confirm - Password</label>
                    <input type="password" class="form-control" name="c-password" required>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" 
                    name="register" value="Register">
                </div>

               

            </form>
    </div>
    
</div>

        
    </div>
    <div class="cart-icon">
        <a href="/cart/cart.php"><img src="./images/yellow-cart.png" alt="Cart"></a>
    </div>
    </nav>

    <section class="promo-section">
        <div class="promo-content">
            <h2>Trade-in-offer</h2>
            <h1>Super value deals<br> <span>On all products</span></h1>
            <p>Save more with coupons & up to 70% off!</p>
            <a href="#" class="shop-now-btn">Shop Now</a>
        </div>
        <div class="promo-image">
            <img src="./images/hero4-removebg-preview.png" alt="Promo Image">
        </div>

        
    </section>
    <div class="container">
        <div class="card">
            <img src="./images/f1.png" alt="Free Shipping">
            <p class="label">Free Shipping</p>
        </div>
        <div class="card">
            <img src="./images/f2.png" alt="Online Order">
            <p class="label">Online Order</p>
        </div>
        <div class="card">
            <img src="./images/f3.png" alt="Save Money">
            <p class="label">Save Money</p>
        </div>
        <div class="card">
            <img src="./images/f4.png" alt="Promotions">
            <p class="label">Promotions</p>
        </div>
        <div class="card">
            <img src="./images/f5.png" alt="Happy Sell">
            <p class="label">Happy Sell</p>
        </div>
        <div class="card">
            <img src="./images/f6.png" alt="24/7 Support">
            <p class="label">24/7 Support</p>
        </div>
    </div>
        

    <div class="newsletter-section">
        <h2>Sign Up For Newsletters</h2>
        <p>Get E-mail updates about our latest shop and <span style="color: #FFA500;">special offers.</span></p>
        
      
    <form id="form" class="form" method="post" action="">
        <input type="email" name="email_id" id="email_id" class="newsletter-input" placeholder="Your email address" required>
        <button type="submit" name="newsletter_submit" class="newsletter-button">Sign Up</button>
    </form>
</div>

<script>
     
    window.onload = function() {
        var email = window.localStorage.getItem('email_id');
        if (email) {
            var params = { email_id: email }; // Use the saved email

             
            emailjs.send('service_o01fu8l', 'template_9nzh8w3', params)
                .then(function(response) {
                    alert('Thank you for signing up for our newsletter!');
                    window.localStorage.removeItem('email_id');  
                })
                .catch(function(error) {
                    alert('Failed to send confirmation email. Please try again.');
                    console.log('Error:', error);
                });
        }
    }
</script>

    <!-- Footer Section -->
    <div class="footer">
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Address: 562 Wellington Road, Street 32, San Francisco</p>
            <p>Phone: +01 2222 365 / (+91) 01 2345 6789</p>
            <p>Hours: 10:00 - 18:00, Mon - Sat</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f">📘</i></a>
                <a href="#"><i class="fab fa-twitter">🐦</i></a>
                <a href="#"><i class="fab fa-instagram">📷</i></a>
                <a href="#"><i class="fab fa-pinterest">📌</i></a>
                <a href="#"><i class="fab fa-youtube">🎥</i></a>
            </div>
        </div>
        <div class="footer-section">
            <h3>About</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>My Account</h3>
            <ul>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">View Cart</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Track My Order</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Install App</h3>
            <div class="install-app">
                <img src="../images/download-on-the-app-store4659-removebg-preview.png" alt="App Store">
                <img src="../images/googleplay-removebg-preview.png" alt="Google Play">
            </div>
            <h3>Secured Payment Gateways</h3>
            <div class="payment-methods">
                <img src="../images/visa-removebg-preview.png" alt="Visa">
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</body>
</html>