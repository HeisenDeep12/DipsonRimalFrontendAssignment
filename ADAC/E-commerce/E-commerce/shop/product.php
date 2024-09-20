<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Fashion T-Shirt</title>
    <link rel="stylesheet" href="product.css">
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
            <li><a href="../shop/shop.php" >Shop</a></li>
            <li><a href="../Blog/blog.php" >Blog</a></li>
            <li><a href="../About us/about.php">About</a></li>
            <li><a href="../Contact us/contact.php">Contact</a></li>
        </ul>
        <div class="cart-icon">
            <a href="/cart/cart.php"><img src="../images/yellow-cart.png" alt="Cart"></a>
        </div>
    </nav>

    <div class="product-page">
        <div class="product-image">
            <img id="mainImage" src="../images/p1.jpg" alt="Men's Fashion T-Shirt">
            <div class="image-slider">
                <img src="../images/p1.jpg" alt="Thumbnail 1" onclick="changeImage('../images/p1.jpg')">
                <img src="../images/p2.jpg" alt="Thumbnail 2" onclick="changeImage('../images/p2.jpg')">
                <img src="../images/p3.jpg" alt="Thumbnail 3" onclick="changeImage('../images/p3.jpg')">
                <img src="../images/p4.jpg" alt="Thumbnail 4" onclick="changeImage('../images/p4.jpg')">
            </div>
        </div>
        <div class="product-details">
            <h1>Men's Fashion T Shirt</h1>
            <p class="price">$139.00</p>
            <label for="size">Select Size</label>
            <select id="size" name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="xl">XL</option>
            </select>
            <button>Add To Cart</button>
            <div class="product-description">
                <h2>Product Details</h2>
                <p>
                    The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric 
                    constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched 
                    comfort with each wear. Featuring a taped neck and shoulder, and a seamless double-needle 
                    collar, and available in a range of colors, it offers it all in the ultimate head-turning package.
                </p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
