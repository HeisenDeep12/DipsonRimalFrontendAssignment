<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecommerce';

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error)
{
    die("Connection Error: ". $conn->connect_error);
}

session_start();

if(!isset($_SESSION['username']))
{
    header('location: ../login.php');
}

if(isset($_POST['order']))
{
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $order_notes = $_POST['order-notes'];
    $status = "requested";


    $qry = "INSERT INTO orders (pid, firstname, lastname, email, mobile, address, quantity, ordernotes, status) 
        VALUES (NULL, '$first_name', '$last_name', '$email', '$mobile', '$address', $quantity, '$order_notes', '$status')";


    if(!$conn->query($qry))
    {
        die('Error: '. $conn->error);
    }

    echo '<script>alert("Your booking has been requested Successfully")</script>';
    echo '<script>window.location.href="shop.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div class="container">  
        <section class="row">
        <form method="post" class="col-md-4 offset-md-4 mt-5">
                
                <h3 class="text-center mb-3">Billing Details</h3>

                <div class="form-group mb-3">
                    <label for="">First-Name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Last-Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Mobile</label>
                    <input type="text" class="form-control" name="mobile" required maxlength="15">
                </div>

                <div class="form-group mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" required maxlength="100">
                </div>

                <div class="form-group mb-3">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control"  name="quantity" value="1" min="1" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Order notes</label>
                    <textarea name="order-notes" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" 
                    name="order" value="Request for order" onclick="return confirm('Do you want to confirm your booking?')">
                </div>

                

            </form>
            
        </section>

        <footer class="row bg-body-tertiary">
            <div class="col-12">
                <p class="text-center pt-3">
                    Copyright &copy Reserved 
                    <?php echo date('Y'); ?>
                </p>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>