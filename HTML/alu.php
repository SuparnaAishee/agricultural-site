<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taja</title>
    <link rel="stylesheet" href="/CSS/cart.css">
</head>
<body>
    
    <section>
<div class="product">
    <img src="/assets/alu.jpeg" alt="Product Image">
    <h2>Product Name</h2>
    <p>Product Description</p>
    <span class="price">$19.99</span>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" value="1" min="1">
    <button class="add-to-cart-btn">Add to Cart</button>
</div>

<div class="cart">
    <h2>Your Cart</h2>
    <ul class="cart-items"></ul>
   
</div>
    </section>
    <script src="/JS/alu.js"></script>
</body>
</html>