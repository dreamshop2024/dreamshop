<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamShop - a clothing store</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="css/fontawesome.css" rel="stylesheet" />
    <link href="css/solid.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script defer src="js/burger.js"></script>
</head>
<body>
    <div class="close-panel" id="close">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <p class="flex">Sign up and get 20% off to your first order. <a href="registr.php">Sign Up Now</a></p>
                </div>
                <div class="col-md-2 col-sm-3 flex flex-start">
                    <button class="close" onclick="hide()">
                        <img src="img/icons/icon_close.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav class="header flex flex-align flex-between col-12 d-none d-sm-flex">
                <a href="index.php">
                    <h2>DreamShop</h2>
                </a>
                <button class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="menu flex flex-between">
                    <li class="link flex flex-align"><a href="shop.php" class="flex flex-align">Shop <img src="img/icons/icon-arrow-down.png" alt=""></a>
                        <ul class="submenu">
                            <li><a href="t-shirt.php">T-shirts</a></li>
                            <li><a href="shorts.php">Shorts</a></li>
                            <li><a href="jeans.php">Jeans</a></li>
                        </ul>
                    </li>
                    <li><a href="#">On Sale</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Brands</a></li>
                </ul>
                <input type="search" placeholder="Search for products...">
                <div class="icon-top flex flex-between">
                    <a href="card.php">
                        <img src="img/icons/icon_cart.png" alt="">
                    </a>
                    <a href="user.php">
                        <img src="img/icons/icon_user.png" alt="">
                    </a>
                </div>
            </nav>

        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="offer">
                        <h1>FIND CLOTHES THAT MATCHES YOUR STYLE</h1>
                        <p>Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
                        <a href="shop.php" class="btn">Shop Now</a>
                    </div>
                    <div class="info-number flex flex-between flex-wrap">
                        <div class="item">
                            <h2>200+</h2>
                            <p>International Brands</p>
                        </div>
                        <div class="item">
                            <h2>2,000+</h2>
                            <p>High-Quality Products</p>
                        </div>
                        <div class="item">
                            <h2>30,000+</h2>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <img class="min" src="img/vector_mini.png" alt="">
                    <img class="max" src="img/vector_max.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <div class="logos">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 col-sm-4">
                    <img src="img/logos/versace.png" alt="">
                </div>
                <div class="col col-xs-12 col-sm-4">
                    <img src="img/logos/zara.png" alt="">
                </div>
                <div class="col col-xs-12 col-sm-4">
                    <img src="img/logos/gucci.png" alt="">
                </div>
                <div class="col col-xs-12 col-sm-6">
                    <img src="img/logos/prada.png" alt="">
                </div>
                <div class="col col-xs-12 col-sm-6">
                    <img src="img/logos/calvin.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="arrival">
        <div class="container">
            <h2>NEW ARRIVALS</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-12 card-media">
                    <div class="card-product">
                        <img src="img/products/product_shirt.png" alt="">
                        <h3>T-shirt with Tape Details</h3>
                        <span class="rate">4.5/5</span>
                        <div class="detail flex flex-between flex-align">
                            <div class="price flex">
                                <span class="base">$120</span>
                                <span class="sale">$100</span>
                            </div>
                            <a href="" class="more">Detail...</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <a href="shop.php" class="viamore">View All</a>
        </div>
    </section>
    <section class="style container">
        <h2>BROWSE BY dress STYLE</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="card-style-min casual">
                    <h3>Casual</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card-style-max formal">
                    <h3>Formal</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card-style-max party">
                    <h3>Party</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-style-min gym">
                    <h3>Gym</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <h2>OUR HAPPY CUSTOMERS</h2>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 col-sm-12">
                    <div class="testimonials-content">
                            <div class="swiper testimonials-slider js-testimonials-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonials-item">
                                        <div class="rate-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="flex flex-align">Sarah M. <img src="img/icons/icon_ok.png" alt=""></h4>
                                        <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear to elegant dresses, every piece I've bought has exceeded my expectations."</p>
                                    </div>
                                    <div class="swiper-slide testimonials-item">
                                        <div class="rate-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="flex flex-align">Alex K. <img src="img/icons/icon_ok.png" alt=""></h4>
                                        <p>"Finding clothes that align with my personal style used to be a challenge until I discovered Shop.co. The range of options they offer is truly remarkable, catering to a variety of tastes and occasions."</p>
                                    </div>
                                    <div class="swiper-slide testimonials-item">
                                        <div class="rate-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="flex flex-align">James L. <img src="img/icons/icon_ok.png" alt=""></h4>
                                        <p>"As someone who's always on the lookout for unique fashion pieces, I'm thrilled to have stumbled upon Shop.co. The selection of clothes is not only diverse but also on-point with the latest trends."</p>
                                    </div>
                                    <div class="swiper-slide testimonials-item">
                                        <div class="rate-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="flex flex-align">Mooen <img src="img/icons/icon_ok.png" alt=""></h4>
                                        <p>"As someone who's always on the lookout for unique fashion pieces, I'm thrilled to have stumbled upon Shop.co. The selection of clothes is not only diverse but also on-point with the latest trends."</p>
                                    </div>
                                </div>
                            </div>
                        <div class="swiper-pagination js-testimonials-pagination"></div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="form flex flex-between flex-wrap">
                <h2>STAY UPTO DATE ABOUT OUR LATEST OFFERS</h2>
                <form action="">
                    <input type="email" placeholder="Enter your email address">
                    <input type="submit" value="Subscribe to Newsletter">
                </form>
            </div>
            <div class="row footer-info">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                    <h2>DreamShop</h2>
                    <p>We have clothes that suits your style and which you’re proud to wear. From women to men.</p>
                    <div class="mb social flex flex-between">
                        <img src="img/icons/icon_twitter.png" alt="">
                        <img src="img/icons/icon_facebook.png" alt="">
                        <img src="img/icons/icon_instagram.png" alt="">
                        <img src="img/icons/icon_git.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4">
                    <h3>Company</h3>
                    <a href="">About</a>
                    <a href="">Features</a>
                    <a href="">Works</a>
                    <a href="">Career</a>
                </div>
                <div class="mb col-xl-2 col-lg-2 col-sm-3">
                    <h3>Help</h3>
                    <a href="">Customer Support</a>
                    <a href="">Delivery Details</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                </div>
                <div class="col-xl-2 offset-xl-0 col-lg-2 offset-lg-0 col-sm-3 offset-sm-1">
                    <h3>FAQ</h3>
                    <a href="">Account</a>
                    <a href="">Manage Deliveries</a>
                    <a href="">Orders</a>
                    <a href="">Payments</a>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-3">
                    <h3>Resources</h3>
                    <a href="">Free eBooks</a>
                    <a href="">Development Tutorial</a>
                    <a href="">How to - Blog</a>
                    <a href="">Youtube Playlist</a>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-6">
                    <p>DreamShop © 2024, All Rights Reserved</p>
                </div>
                <div class="col-lg-6">
                    <div class="logo-card flex flex-between flex-end">
                        <img src="img/icons/icon_visa.png" alt="">
                        <img src="img/icons/icon_master.png" alt="">
                        <img src="img/icons/icon_paypal.png" alt="">
                        <img src="img/icons/icon_apay.png" alt="">
                        <img src="img/icons/icon_pay.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="gotop gotopshow">
        <img src="img/icons/to-top.svg" alt="">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/totop.js"></script>
    <script>
        const swiper = new Swiper('.js-testimonials-slider', {
            grabCursor: true,
            spaceBetweel: 30,
            pagination: {
                el: '.js-testimonials-pagination',
                clickable: true
            },
            breakpoints: {
                767:{
                    slidesPerView:2
                }
            }

        });
    </script>
        <script>
        function hide() {
            let el = document.getElementById('close');
            if (el.style.display === 'none') {
                el.style.display = 'block';
            } else {
                el.style.display = 'none';
            }
        }
    </script>

</body>
</html>