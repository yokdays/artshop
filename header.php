<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>HEADER</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="home.php" class="logo"><img src="img/logo2.png"></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="view_products.php">Products</a>
                <a href="order.php">Orders</a>
                <a href="about.php">About us</a>
                <a href="contact.php">Contact us</a>
            </nav>
            <div class="icons">
                <i class="bx bxs-user" id="user-btn"></i>
                <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup><p class="nav-info">0</p></sup></a>
                <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup><p class="nav-info">0</p></sup></a>
                <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
            </div>
            <div class="user-box">
                <p>username : <span><?php //echo $_SESSION['firstname']; ?></span></p>
                <p>Email : <span><?php //echo $_SESSION['email']; ?></span></p>
                <a href="signin.php" class="btn">Login</a>
                <a href="index.php" class="btn">register</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </header>
</body>
</html>