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
    <title>Cricket Bat</title>
</head>
<body>

    <div class="box fixed-top">
        <header class="sticky">
            <div class="logo">
                <img src="28267842_7.jpg" alt="Logo">
                <span class="company-name">Sam.</span>
            </div>
                <nav class="navigation">
                <a href="D:\Webtech_Project\firstpage.html">Home</a>
                <a href="D:\Webtech_Project\shop.html">Shop</a>
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
                <img src="sports/sports_bat.jpg" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home/Bat/1001</h6>
                <h3 class="py-4">Cricket Bat</h3>
                <h2>$139.00</h2>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span> Crafted for precision and power, our cricket bat delivers exceptional performance on the pitch. Engineered with premium materials for durability and strength, it's the perfect companion for every batsman's quest for runs.<br>
                </span>
                    <select name="" id="" class="my-3">
                        <option value="1">Payment Method</option>
                        <option value="1">Paytm</option>
                        <option value="1">Credit Card</option>
                        <option value="1">Debit Card</option>
                    </select>
                    <input type="number" value="1">
                    <button class="buy-btn">Buy</button>
                </div>
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