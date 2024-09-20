<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Item</title>
    <link rel="stylesheet" href="cart-item.css">
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
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="../shop/shop.php">Shop</a></li>
            <li><a href="../Blog/blog.php">Blog</a></li>
            <li><a href="../About us/about.php">About</a></li>
            <li><a href="../Contact us/contact.php">Contact</a></li>
        </ul>
        <div class="cart-icon">
            <a href="/cart/cart.php"><img src="../images/yellow-cart.png" alt="Cart"></a>
        </div>
    </nav>
    <div class="cart-item">
        <div class="item-image">
            <img src="../images/p1.jpg" alt="Item Image">
        </div>
        <div class="item-details">
            <h3 class="item-title">Cartoon Astronaut t-shirt</h3>
            
            <div class="item-quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <div class="item-price">
                Price:- $19.99
            </div>
            <button class="remove-item">Remove</button>
            
        </div>
    </div><div class="cart-item">
        <div class="item-image">
            <img src="../images/p2.jpg" alt="Item Image">
        </div>
        <div class="item-details">
            <h3 class="item-title">Cartoon Astronaut t-shirt</h3>
            
            <div class="item-quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <div class="item-price">
                Price:- $39.99
            </div>
            <button class="remove-item">Remove</button>
            
        </div>
    </div>

    <div class="cart-item">
        <div class="item-image">
            <img src="../images/n1.jpg" alt="Item Image">
        </div>
        <div class="item-details">
            <h3 class="item-title">Cartoon Astronaut t-shirt</h3>
            
            <div class="item-quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <div class="item-price">
                Price:- $19.99
            </div>
            <button class="remove-item">Remove</button>
            
        </div>
    </div>

    <div class="cart-item">
        <div class="item-image">
            <img src="../images/p6.jpg" alt="Item Image">
        </div>
        <div class="item-details">
            <h3 class="item-title">Cartoon Astronaut t-shirt</h3>
            
            <div class="item-quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <div class="item-price">
                Price:- $199.99
            </div>
            <button class="remove-item">Remove</button>
            
        </div>
    </div>
    <button class="buy-item">Proceed to CheckOut</button>

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
</body>
</html>
