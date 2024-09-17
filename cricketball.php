<?php

// Database connection parameters
$host = 'localhost';
$dbname = 'project';
$username = 'root';
$password = 'Mysql@12';

// Establishing a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect to the database. " . $e->getMessage());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
    $paymentMethod = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);

    // Check if input is valid
    if ($quantity === false || $quantity <= 0) {
        die("Error: Invalid quantity.");
    }

    if (empty($paymentMethod) || !in_array($paymentMethod, ['Paytm', 'Credit Card', 'Debit Card'])) {
        die("Error: Invalid payment method.");
    }

    // Hardcoded product ID
    $productID = 1002;

    // Fetch product details from the database
    try {
        $stmt = $pdo->prepare("SELECT Price FROM product WHERE Product_ID = ?");
        $stmt->execute([$productID]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            die("Error: Product not found.");
        }
        $productPrice = $row['Price'];
    } catch (PDOException $e) {
        die("Error: Unable to fetch product details. " . $e->getMessage());
    }

    // Calculate total price
    $totalPrice = $productPrice * $quantity;

    // Start the session
    session_start();
    // Assuming user is logged in and their ID is stored in session
    $userID = $_SESSION['user_id'] ?? null;
    if (!$userID) {
        die("Error: User not logged in.");
    }

    // Get the current date
    $currentDate = date('Y-m-d');

    // Insert order details into the database
    try {
        $sql = "INSERT INTO orders (Product_ID, User_ID, Price, Quantity, Payment, Total, Date) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$productID, $userID, $productPrice, $quantity, $paymentMethod, $totalPrice, $currentDate]);
        // Redirect to a success page after order placement
        header("Location: firstpage.php");
        exit();
    } catch (PDOException $e) {
        die("Error: Unable to place order. " . $e->getMessage());
    }
}

// Close the database connection
$pdo = null;
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstpagestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .sproduct{
            position: relative;
            top:28px;
        }

        .sproduct select{
            display: block;
            padding: 5px 10px;
        }

        .sproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus{
            outline: none;
        }

        .buy-btn{
            background: orange;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>
    <title>Cricket Ball</title>
</head>
<body>

    <div class="box fixed-top">
        <header class="sticky">
            <div class="logo">
                <img src="28267842_7.jpg" alt="Logo">
                <span class="company-name">Sam.</span>
            </div>
                <nav class="navigation">
                <a href="D:\Webtech_Project\firstpage.php">Home</a>
                <a href="D:\Webtech_Project\shop.php">Shop</a>
                <a href="#">Profile</a>
                <a href="#">Contact</a>
                <button class="btnlogin" id="btnlogin">Login</button>
                <script>
                    document.querySelector('.btnlogin').addEventListener('click', function() {
                    window.location.href = 'loginpage.html';
                });
                </script>
            </nav>
        </header>
    </div>

    <section class="container sproduct my-5 pt-5">
        <div class="row">
            <div class="col-lg-5">
                <img src="sports/sports_cricketball.jpg" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home/Ball/1002</h6>
                <h3 class="py-4">Cricket Ball</h3>
                <h2>$139.00</h2>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span> Designed to perfection, our cricket ball ensures an electrifying game experience with every delivery. Crafted from top-grade materials, it offers consistent bounce and seam movement, challenging batsmen and delighting bowlers alike. Its superior grip and aerodynamics guarantee precise flight, enhancing the thrill of each wicket-taking delivery. Whether playing in the backyard or on the professional field, our cricket ball delivers unmatched performance and durability, making it a must-have for cricket enthusiasts of all levels.</span>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">   
                <select name="payment_method" id="" class="my-3">
                        <option value="1">Payment Method</option>
                        <option value="Paytm">Paytm</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                    </select>
                    <input type="number" name="quantity" value="1">
                    <button type="submit" class="buy-btn">Buy</button>
                </div>
                </form> 
        </div>
    </section>

    <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-5">
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <img src="28267842_7.jpg" alt="" id="footerimg">
                    <p class="pt-3">Discover the art of creating a responsive eCommerce website using HTML, CSS, and JavaScript. This comprehensive eCommerce website tutorial will guide you through designing an engaging website with HTML and CSS.</p>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Featured</h5>
                    <ul class="text-uppercase list-unstyled">
                        <li><a href="#">men</a></li>
                        <li><a href="#">qwe</a></li>
                        <li><a href="#">rty</a></li>
                        <li><a href="#">loiuh</a></li>
                        <li><a href="#">mnbvc</a></li>
                        <li><a href="#">oiuy</a></li>
                    </ul>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Contact Us</h5>
                    <div>
                        <h6 class="text-uppercase">Address</h6>
                        <p>C2-1405 Mahindra Antheia</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Phone</h6>
                        <p>+91-7972608599</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Email</h6>
                        <p>shubhuam1209@gmail.com</p>
                    </div>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Instagram</h5>
                    <div class="row">
                        <img src="insta/1.jpg" alt="" class="img-fluid w-25 h-100 m-2">
                        <img src="insta/2.jpg" alt="" class="img-fluid w-25 h-100 m-2">
                        <img src="insta/3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
                        <img src="insta/4.jpg" alt="" class="img-fluid w-25 h-100 m-2">
                        <img src="insta/5.jpg" alt="" class="img-fluid w-25 h-100 m-2">
                    </div>
                </div>
            </div>
            <div class="copyright mt-5">
                <div class="row container mx-auto">
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="payment.png" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-nowrap">
                        <p>sam eCommerce 2021. All Rights Reserved</p>
                    </div>
                    <div class="logos col-lg-3 col-md-6 col-12">
                        <a href="#"><i class='bx bxl-youtube' ></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>