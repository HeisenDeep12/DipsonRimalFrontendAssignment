<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-color: #2b3a4a; */
            color: white;
        }

        /* Contact Section */
        .contact-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            background-image: url('../images/banner.png'); /* Placeholder for cityscape */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .contact-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(43, 58, 74, 0.8); */
        }

        .contact-content {
            position: relative;
            text-align: center;
            z-index: 1;
            color: rgb(255, 255, 255);
        }

        .contact-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .contact-content p {
            font-size: 1.2rem;
            color: #ffffff;
        }

        
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .contact-info {
            max-width: 45%;
            color: black;
            font-size: 1.2rem;
        }

        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: black;
        }

        .contact-info p {
            margin: 10px 0;
            font-size: 16px;
            color: black;

        }

        .contact-info p.icon {
            display: flex;
            align-items: center;
        }

        .contact-info p.icon img {
            margin-right: 10px;
        }

        .contact-info p.hours {
            margin-top: 20px;
        }

        .map {
            max-width: 50%;
        }

        .map img {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
        }

        .message-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
        }

        .message-form {
            flex: 1;
        }

        .message-form h2 {
            font-size: 18px;
            color: #555;
        }

        .message-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .message-form input, .message-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .message-form button {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .message-form button:hover {
            background-color: #005a4a;
        }

        .contact-person {
            display: flex;
            align-items: center;
            flex: 0.4;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-left: 10%;
            margin-top: 10%;
        }

        .contact-person div {
            display: flex;
            align-items: center;
        }

        .contact-person img {
            border-radius: 50%;
            margin-right: 15px;
            width: 50px;
            height: 50px;
        }

        .contact-person h3 {
            margin: 0;
            font-size: 18px;
            color: #555;
            margin-right: 20px;
        }

        .contact-person p {
            margin: 5px 0;
            font-size: 14px;
            color: #372f2f;
        }

        .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #212128; 
    border-bottom: 1px solid #ccc; 
    
}

.logo-img {
    height: 80px;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav-links li {
    position: relative;
}

.nav-links a {
    text-decoration: none;
    color: #d9cbcb; 
    font-weight: 500;
    font-size: 18px;
}


.nav-links a:hover {
    color: #e2e669; 
    border-bottom: 2px solid #b3b331; 
    padding-bottom: 2px;
}

.cart-icon img {
    height: 54px; 
}


.nav-toggle {
    display: none;
}

.nav-toggle-label {
    display: none;
    cursor: pointer;
    flex-direction: column;
    gap: 5px;
}

.nav-toggle-label span,
.nav-toggle-label span::before,
.nav-toggle-label span::after {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #b3b331;
    position: relative;
    transition: background-color 0.3s, transform 0.3s;
}

.nav-toggle-label span::before {
    content: '';
    position: absolute;
    top: -8px;
    left: 0;
    transform: translateY(-10px);
}

.nav-toggle-label span::after {
    content: '';
    position: absolute;
    top: 8px;
    left: 0;
    transform: translateY(10px);
}

.nav-toggle:checked + .nav-toggle-label span {
    background-color: transparent;
}

.nav-toggle:checked + .nav-toggle-label span::before {
    transform: rotate(45deg) translateY(0);
}

.nav-toggle:checked + .nav-toggle-label span::after {
    transform: rotate(-45deg) translateY(0);
}

@media (max-width: 576px) {
    .nav-links {
        position: absolute;
        top: 70px;
        right: 0;
        background-color: #212128;
        flex-direction: column;
        width: 200px;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }

    .nav-links li {
        margin: 20px 0;
    }

    .nav-toggle:checked ~ .nav-links {
        transform: translateX(0);
    }

    .nav-toggle-label {
        display: flex;
    }
}

@media (max-width: 576px) {
    .cart-icon {
        display: block;
    }

    .logo-img {
        height: 35px;
    }

    .nav-links {
        width: 100%;
        right: 0;
        text-align: center;
    }
}

.newsletter-section {
    background-color: #002f6c;
    color: white;
    padding: 30px 20px; 
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.newsletter-section h2 {
    font-size: 1.8rem;
    margin: 0;
}

.newsletter-section p {
    margin: 10px 0 20px;
    font-size: 1.1rem;
}

.newsletter-input {
    padding: 10px;
    width: 300px;
    max-width: 90%; 
    border: none;
    border-radius: 5px;
    margin-right: 10px;
}

.newsletter-button {
    padding: 10px 20px;
    background-color: #008080;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1rem;
    margin-top: 10px;
}

.newsletter-button:hover {
    background-color: #006666;
}


@media (max-width: 768px) {
    .newsletter-input, .newsletter-button {
        width: 100%;
        margin: 5px 0;
    }
}

.footer {
    background-color: #fffffc;
    padding: 40px 20px; 
    text-align: left;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap; 
    font-size: 0.9rem;
}

.footer-section {
    flex: 1; 
    min-width: 200px;
    margin: 20px; 
}

.footer-section h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #212128;
}

.footer-section p, .footer-section li {
    margin: 5px 0;
    color: gray;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li a {
    text-decoration: none;
    color: black;
}

.footer-section ul li a:hover {
    color: #007BFF;
}

.social-icons a {
    margin-right: 10px;
    font-size: 1.5rem;
    color: black;
    text-decoration: none;
}

.social-icons a:hover {
    color: #007BFF;
}

.install-app {
    display: flex;
    gap: 10px;
    margin-top: 20px;
    flex-wrap: wrap; 
}

.install-app img {
    width: 100px;
    height: 100px;
}

.payment-methods img {
    width: 50px;
    margin-right: 10px;
}


@media (max-width: 768px) {
    .footer {
        flex-direction: column;
        text-align: center;
    }

    .footer-section {
        margin: 20px 0;
        text-align: center;
    }

    .install-app, .payment-methods {
        justify-content: center;
    }
}
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../images/Black_logo-removebg-preview.png" alt="Logo" class="logo-img">
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
        <ul class="nav-links">
            <li><a href="/index.php" class="active">Home</a></li>
            <li><a href="/shop/shop.php">Shop</a></li>
            <li><a href="/Blog/blog.php">Blog</a></li>
            <li><a href="/About us/about.php">About</a></li>
            <li><a href="Contact us/contact.php">Contact</a></li>
        </ul>
        <div class="cart-icon">
            <a href="../cart/cart.php"><img src="../images/yellow-cart.png" alt="Cart"></a>
        </div>
    </nav>



    <div class="contact-section">
        <div class="overlay"></div>
        <div class="contact-content">
            <h1>#let's_talk</h1>
            <p>LEAVE A MESSAGE, We love to hear from you!</p>
        </div>
    </div>

    <div class="container">
        <div class="contact-info">
            <h2>GET IN TOUCH</h2>
            <h1>Visit one of our agency locations or contact us today</h1>
            <h2>Head Office</h2>
            <p class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/place-marker--v1.png"/>44600, Kathmandu, Nepal</p>
            <p class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/email.png"/> ADA@example.com</p>
            <p class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/phone.png"/> +1 057 5589765</p>
            <p class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/time.png"/> Monday to Saturday: 9.00am to 16.00pm</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27776848722!2d85.28493299361479!3d27.70903024183718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1723975621536!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="message-section">
        <div class="message-form">
            <h2>LEAVE A MESSAGE</h2>
            <h1>We love to hear from you</h1>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="E-mail" required>
                <input type="text" placeholder="Subject" required>
                <textarea rows="6" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="contact-person">
            <div>
                <img src="../images/1.png" alt="John Doe">
                <div>
                    <h3>John Doearet</h3>
                    
                    <p>Senior Marketing Manager</p>

                    
                </div>
            </div>
            <div>
                <img src="../images/2.png" alt="William Smith">
                <div>
                    <h3>Wiilliiam Smith</h3>
                    <p>Mid Marketing Manager</p>

                    
                </div>
            </div>
            <div>
                <img src="../images/3.png" alt="Emma Stone">
                <div>
                    <h3>Emma Stone</h3>
                    <p>Junior Marketing Manager</p>

                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="newsletter-section">
    <h2>Sign Up For Newsletters</h2>
    <p>Get E-mail updates about our latest shop and <span style="color: #FFA500;">special offers.</span></p>
    <input type="email" class="newsletter-input" placeholder="Your email address">
    <button class="newsletter-button">Sign Up</button>
</div>

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
</body>

</html>
