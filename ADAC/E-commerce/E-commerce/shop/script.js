// script.js

// Function to change the main product image
function changeImage(imageSrc) { 
    document.getElementById('mainImage').src = imageSrc;
}

// Function to redirect to the product page
function redirectToProduct() {
    window.location.href = 'product.php';
}
