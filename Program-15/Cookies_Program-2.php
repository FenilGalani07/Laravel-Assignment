<?php
// Start the session
session_start();

// Function to add item to cart
function addToCart($item) {
    if (isset($_COOKIE['cart'])) {
        $cart = json_decode($_COOKIE['cart'], true);
    } else {
        $cart = [];
    }
    
    // Add item to cart
    if (!in_array($item, $cart)) {
        $cart[] = $item;
    }
    
    // Set the cookie with the updated cart
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 30 days expiration
}

// Check if an item is being added
if (isset($_POST['add_to_cart'])) {
    $item = $_POST['item'];
    addToCart($item);
}

// Get the cart items from the cookie
$cartItems = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Shopping Cart Example</h1>
        <div class="products">
            <h2>Products</h2>
            <form method="POST">
                <div class="product">
                    <span>Item 1</span>
                    <button type="submit" name="add_to_cart" value="Item 1">Add to Cart</button>
                </div>
                <div class="product">
                    <span>Item 2</span>
                    <button type="submit" name="add_to_cart" value="Item 2">Add to Cart</button>
                </div>
                <div class="product">
                    <span>Item 3</span>
                    <button type="submit" name="add_to_cart" value="Item 3">Add to Cart</button>
                </div>
            </form>
        </div>

        <div class="cart">
            <h2>Your Cart</h2>
            <ul>
                <?php if (empty($cartItems)): ?>
                    <li>Your cart is empty.</li>
                <?php else: ?>
                    <?php foreach ($cartItems as $cartItem): ?>
                        <li><?php echo htmlspecialchars($cartItem); ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>
</html>