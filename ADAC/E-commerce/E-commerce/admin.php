<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecommerce';
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Allowed image types
$allowed_extensions = ['jpg', 'jpeg'];
$upload_dir = __DIR__ . '/uploads/';

// Message variable
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_product'])) {
        // Handle adding new product
        $name = $conn->real_escape_string($_POST['name']);
        $price = $conn->real_escape_string($_POST['price']);
        $size = $conn->real_escape_string($_POST['size']);
        $description = $conn->real_escape_string($_POST['description']);

        // Handle image upload
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

            // Check if the file extension is allowed
            if (in_array($image_ext, $allowed_extensions)) {
                // Ensure 'uploads' directory exists
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true); // Create directory if not exists
                }

                $image_path = 'uploads/' . basename($image_name); // Relative path for HTML

                // Move the uploaded file to the server
                if (move_uploaded_file($image_tmp, $upload_dir . basename($image_name))) {
                    $sql = "INSERT INTO products (name, price, size, description, image) VALUES ('$name', '$price', '$size', '$description', '$image_path')";
                    if ($conn->query($sql) === TRUE) {
                        $message = "Product added successfully";
                    } else {
                        $message = "Error: " . $conn->error;
                    }
                } else {
                    $message = "Error uploading image";
                }
            } else {
                $message = "Invalid image format. Only JPG and JPEG files are allowed.";
            }
        }
    } elseif (isset($_POST['update_product'])) {
        // Handle product update
        $id = $conn->real_escape_string($_POST['id']);
        $name = $conn->real_escape_string($_POST['name']);
        $price = $conn->real_escape_string($_POST['price']);
        $size = $conn->real_escape_string($_POST['size']);
        $description = $conn->real_escape_string($_POST['description']);

        // Check if a new image was uploaded
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

            // Check if the file extension is allowed
            if (in_array($image_ext, $allowed_extensions)) {
                $image_path = 'uploads/' . basename($image_name);

                // Move the uploaded file to the server
                if (move_uploaded_file($image_tmp, $upload_dir . basename($image_name))) {
                    // Update product with new image
                    $sql = "UPDATE products SET name='$name', price='$price', size='$size', description='$description', image='$image_path' WHERE id='$id'";
                }
            } else {
                $message = "Invalid image format. Only JPG and JPEG files are allowed.";
            }
        } else {
            // Update product without changing the image
            $sql = "UPDATE products SET name='$name', price='$price', size='$size', description='$description' WHERE id='$id'";
        }

        if ($conn->query($sql) === TRUE) {
            $message = "Product updated successfully";
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}

if (isset($_GET['delete'])) {
    // Handle product delete
    $id = $conn->real_escape_string($_GET['delete']);
    $sql = "DELETE FROM products WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        $message = "Product deleted successfully";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Fetch products for display
$sql = "SELECT * FROM products";
$products = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .table img {
            max-width: 100px;
            height: auto;
        }
        .alert {
            margin-top: 20px;
        }
        .alert-dismissible {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Manage Products</h1>

    <!-- Add Product Form -->
    <h2>Add New Product</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" step="0.01" name="price" required>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary" name="add_product">Add Product</button>
    </form>

    <!-- Existing Products List -->
    <h2 class="my-4">Existing Products</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($products->num_rows > 0) {
                while ($row = $products->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image"></td>
                        <td>
                            <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
            <?php } } ?>
        </tbody>
    </table>

    <!-- Edit Product Form (only shown if an edit action is triggered) -->
    <?php if (isset($_GET['edit'])) {
        $id = $conn->real_escape_string($_GET['edit']);
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
    ?>
    <h2 class="my-4">Edit Product</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">

        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" step="0.01" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size" value="<?php echo htmlspecialchars($product['size']); ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload New Image (optional):</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary" name="update_product">Update Product</button>
    </form>
    <?php } ?>
</div>

<!-- JavaScript for alert messages -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var message = "<?php echo addslashes($message); ?>";
        if (message) {
            var alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-info alert-dismissible';
            alertDiv.role = 'alert';
            alertDiv.innerHTML = message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            document.body.insertBefore(alertDiv, document.body.firstChild);
            setTimeout(function () {
                $(alertDiv).alert('close');
            }, 5000); // Hide the alert after 5 seconds
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
