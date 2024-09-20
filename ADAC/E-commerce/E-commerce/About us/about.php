<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#KnowUs Section</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-color: #2b3a4a; */
            color: white;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
            background-image: url('../images/b1.jpg'); 
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(43, 58, 74, 0.8); Dark overlay */
        }
        .content {
            position: relative;
            text-align: center;
            z-index: 1;
        }
        .content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2rem;
            color: #b0b0b0;
        }

        .section {
            display: flex;
            align-items: center;
            padding: 50px;
            background-color: white;
            color: black;
        }

        .section img {
            width: 50%;
            max-width: 500px;
            margin-right: 20px;
        }

        .section .text-content {
            width: 50%;
        }

        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.1rem;
            line-height: 1.6;
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
    background-color: #f8f7f3;
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
            <li><a href="About us/about.php">About</a></li>
            <li><a href="/Contact us/contact.php">Contact</a></li>
        </ul>
        <div class="cart-icon">
            <a href="/cart/cart.php"><img src="../images/yellow-cart.png" alt="Cart"></a>
        </div>
    </nav>


    <div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>#KnowUs</h1>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
    </div>

    <div class="section">
        <img src="../images/a6.jpg" alt="Illustration">
        <div class="text-content">
            <h2>Who We Are?</h2>
            <p>At ADA Clothes, we believe that fashion is more than just clothing—it's a statement, an identity, and a way to express who you are. Founded with a passion for creativity and craftsmanship, ADA Clothes brings you a carefully curated collection that combines modern trends with timeless elegance.

                Our mission is to offer stylish, high-quality apparel that empowers people to feel confident and look their best, no matter the occasion. From chic everyday wear to standout pieces for special events, every item in our collection is designed to make you feel uniquely you.
                
                ADA Clothes is committed to sustainability and ethical production practices. We work closely with skilled artisans and trusted manufacturers to ensure that each piece is made with care, attention to detail, and a focus on minimizing our environmental impact.
                
                Explore our website to discover the latest arrivals, get inspired by our seasonal collections, and learn more about the story behind ADA Clothes. Whether you're refreshing your wardrobe or looking for that perfect statement piece, we're here to help you find fashion that fits your lifestyle.
                
                Join us on our journey to redefine fashion, one piece at a time.</p>
            
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
