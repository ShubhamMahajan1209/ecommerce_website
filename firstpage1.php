<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstpagestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>First Page</title>
</head>
<body>

    <!-- Navigation -->
    <div class="box fixed-top">
    <header class="sticky">
        <div class="logo">
            <img src="28267842_7.jpg" alt="Logo">
            <span class="company-name">Sam.</span>
        </div>
            <nav class="navigation">
            <a href="firstpage1.php">Home</a>
            <a href="shop.html">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    </div>

    <!-- Banner -->
    <section id="home">
    <div onclick="window.location.href='shop.html';" class="container">
        <h5>NEW ARRIVAL</h5>
        <h1><span>Best Price </span>This year</h1>
        <p>Shoomatic offers your very comfortable time <br>on walking and exercise
        </p>
        <!-- <br> -->
        <button>Shop Now</button>
    </div>
    </section>

    <!-- Brand -->
    <section id="brand" class="container">
        <div class="row m-0 py-5">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="1.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="2.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="3.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="4.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="5.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="6.png" alt="">
        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img src="shoes.jpg" alt="" class="img-fluid">
                <div class="details1">
                    <h2>Extreme Rare Sneakers</h2>
                    <button class="newbtn text-uppercase">Shop Now</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img src="kid.jpg" alt="" class="img-fluid">
                <div class="details2">
                    <h2>Awesome Blank Outfit</h2>
                    <button class="newbtn text-uppercase">Shop Now</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img src="watch.jpg" alt="" class="img-fluid">
                <div class="details3">
                    <h2>Sportswear Upto 50% Off</h2>
                    <button class="newbtn text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="featured my-5 pd-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on rymo</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes1.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes2.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="bag.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="cap.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
        </div>
    </section>

    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection<br>UP TO 20% OFF</h1>
            <button class="text-uppercase">Shop Now</button>
        </div>
    </section>

    <section id="clothes" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses & Jumpsuits</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on rymo</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes1.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes2.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="bag.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="cap.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
        </div>
    </section>

    <section id="watches" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Best Watches</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on rymo</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes1.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes2.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="bag.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="cap.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
        </div>
    </section>

    <section id="shoes" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Running Shoes</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on rymo</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes1.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shoes2.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="bag.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="cap.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Sports Shoes</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>