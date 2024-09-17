<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstpagestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        .pagechange{
            position: absolute;
            left: 110px;
            top: 140px;
        }
    </style>
    <title>Shop</title>
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
            <a href="firstpage.html">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
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


    <nav class="pagechange" aria-label="...">
        <ul class="pagination">
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">Sports</a></li>
          <li class="page-item" >
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>


    <section id="clothes" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h3>Sports Products</h3>
            <hr>
            <p>Here you can check out our new product with fair price on SAM</p>
        </div>
        <div class="row mx-auto container">
            <div onclick="window.location.href='badminton.php';" class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_badminton.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Badminton Racket</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_basketball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">BasketBall</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div onclick="window.location.href='cricketbat.php';" class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_bat.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Cricket Bat</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div onclick="window.location.href='cricketball.php';" class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_cricketball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Cricket Ball</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_football.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Football</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_hockeystick.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Hockey Stick</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_tennisball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Tennis Ball</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_pingpongball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Ping Pong Ball</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
                
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_volleyball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Volley Ball</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_hockeyball.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Hockey Ball</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_ttracket.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Table Tennis Racket</h5>
                    <h4 class="p-price">$92</h4>
                    <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="sports/sports_golfset.jpg" alt="">
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                    <h5 class="p-name">Golfset</h5>
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