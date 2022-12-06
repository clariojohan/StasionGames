<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{asset('css/account.css')}}" />
    </head>
    <body class="bg-dark">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="{{asset('images/logo.jpg')}}" alt=""
                        style="width: 7.5em; border-radius: 0.5em" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/carts"><i
                                    class="fa-solid fa-cart-shopping"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/account"><i
                                    class="fa-solid fa-user"></i></a>
                        </li>
                        @if (Auth::check())
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <div class="py-5"></div>
        <section class="py-2">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-8">
                        <div class="container-lg my-3">
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                                </ol>
                                
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://dummyimage.com/600x400/000/fff" class="d-block w-100" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://dummyimage.com/600x400/000/fff" class="d-block w-100" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://dummyimage.com/600x400/000/fff" class="d-block w-100" alt="Slide 3">
                                    </div>
                                </div>
                        
                                <!-- Carousel controls -->
                                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small mb-1 text-white-50">XBOX ONE</div>
                        <h1 class="display-5 fw-bolder text-white">Cuphead</h1>
                        <div class="medium mb-1 text-white-50">Released 11/9/2021</div>
                        <div class="small mb-5 text-white-50">Genre <a href="/">Racing</a></div>
                        <div class="fs-1 mb-5 text-white">
                            <span>$50.00</span>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-outline-light flex-shrink-0 w-100" type="button">
                                <i class="fa-solid fa-cart-shopping me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-2">
            <div class="container px-4 px-lg-5 my-2">
                <div class="col mb-1">
                    <h3 class="fw-bolder mb-4 text-white">Come one, come all, to witness an interactive entertainment spectacle for the ages!</h3>
                    <p class="medium mb-4 text-white-50">Presenting… the all-cartoon Wondergame Cuphead!! In this classic run and gun action game, play as brothers Cuphead or Mugman (in single player or local co-op) as you traverse strange worlds and take on massive, screen-filling bosses to earn your souls back from The Devil himself!</p>
                    <p class="medium mb-4 text-white-50">It's no exaggeration to say there really isn't any other experience like this worldwide phenomenon from developer Studio MDHR. Inspired by cartoons of the 1930s, Cuphead's visuals and audio are meticulously created with the same techniques of the era: traditional hand drawn cel animation, watercolor backgrounds, and original jazz recordings. Cuphead truly is a playable cartoon that feels plucked from the golden era of animation.</p>
                    <p class="medium mb-4 text-white-50">But that's not all! This raucous retail edition includes the incredibly popular DLC expansion "The Delicious Last Course" on-disc/cartridge, offering players a bevy of additional bosses, wondrous weapons & charms, and all-new playable character Ms. Chalice. Add in a set of delightful pack-ins lovingly crafted by the artists at Studio MDHR, and you get quite simply the most complete Cuphead experience ever, perfect for long-time fans and newcomers alike!</p>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-2">
            <div class="container px-4 px-lg-5 my-2">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <h4 class="fw-bolder mb-4 text-white">Game Details</h4>
                    <div class="col-md-2 mb-1">
                        <p class="medium mb-4 fw-bold text-white">Publisher</p>
                        <p class="medium mb-4 fw-bold text-white">Rating</p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <p class="medium mb-4 text-white-50">Skybound Games</p>
                        <p class="medium mb-4 text-white-50">Everyone 10+</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-dark">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4 text-white">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 bg-dark border-secondary">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-white">Fancy Product</h5>
                                    <!-- Product price-->
                                    <p class="text-white-50">$40.00</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-dark border-secondary">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-white">Fancy Product</h5>
                                    <!-- Product price-->
                                    <p class="text-white-50">$40.00</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-dark border-secondary">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-white">Fancy Product</h5>
                                    <!-- Product price-->
                                    <p class="text-white-50">$40.00</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-dark border-secondary">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-white">Fancy Product</h5>
                                    <!-- Product price-->
                                    <p class="text-white-50">$40.00</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Game News</h4>
                        <p>"Halo: Infinity" has published. Download now!</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email" />
                            <input type="submit" value="Ask us!" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="/about-us">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Reverse Engineering</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Web Exploitation</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Digital Forensic</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Binary Exploitation</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Playstation 5 Hacking</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Kemanggisan <br />
                            Bekasi, JKT 809413 <br />
                            Indonesia
                            <br />
                            <br />
                            <strong>Phone: </strong> +62 812 9021 2212
                            <br />
                            <strong>Email: </strong> rental@aja.com
                            <br />
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About RentalAja</h3>
                        <h7>We're giving you an easy service to be used to play games more lightly and more
                            suitable with your passion.</h7>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="#" class="linkedin">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong> <span>RentalAja </span> </strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="/dashboard">RentalAja</a>
            </div>
        </div>
    </footer>
        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>
