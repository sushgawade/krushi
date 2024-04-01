<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive nav bar</title>
    <link rel="stylesheet" href="head.css">
    <script src="head.js"></script>
</head>
<body>
    <header>
        <img src="images/logo3.png" alt="" class="logo">
        <nav>
            <ul class="navlinks">
                <li class="items"><a href="index.php">होम</a></li>
                <li class="items"><a href="about.php">आमच्याविषयी</a></li>
                <li class="items"><a href="product.php">औषधे</a></li>
                <li class="items"><a href="login.php">लॉगिन</a></li>
                <li class="items"><a href="signup.php">रजिस्टर</a></li>
                <li><a href="contact.php"><button>संपर्क</button></a></li>
                <li onclick="showSidebar()"><a href="#"><ion-icon name="menu-outline"></ion-icon></a></li>
            </ul>
            <ul class="sidebar">
                <li onclick="closeSidebar()"><a href="#"><ion-icon name="close-outline"></ion-icon></a></li>
                <li><a href="index.php">होम</a></li>
                <li><a href="about.php">आमच्याविषयी</a></li>
                <li><a href="product.php">औषधे</a></li>
                <li><a href="login.php">लॉगिन</a></li>
                <li><a href="signup.php">रजिस्टर</a></li>
                <img src="images/logo3.png" alt="" height="100px" width="100px">
            </ul>
        </nav>
    </header>
</body>
        
        
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
