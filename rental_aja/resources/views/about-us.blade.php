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
    <body class="d-flex flex-column bg-dark">
        <main class="flex-shrink-0 ">
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
            <!-- Header-->
            <div class="py-5"></div>
            <header class="py-2">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3 text-white"> We provide the most convenient way to play a wide range of console games.</h1>
                                <p class="lead fw-normal text-white-50 mb-4">RentalAja was built on the idea that quality, functional games should be available to everyone. Use our services and support us by purchasing one of our premium products or services.</p>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-dark" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/000/6c757d" alt="..." /></div>
                        <div class="col-lg-6">
                            <h1 class="fw-bolder text-white">What we do</h1>
                            <p class="lead fw-normal text-white-50 mb-0 ">RentalAja puts video games where they belong—in the hands of the gamers who love 'em. RentalAja also sells new consoles, controllers, games, accessories and collectibles, as well as an extensive selection of gently used titles from our rental library, almost always complete with original case, artwork, codes and inserts. </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-1">
                <div class="container px-5 my-1">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/000/6c757d" alt="..." /></div>
                        <div class="col-lg-6">
                            <h1 class="fw-bolder text-white">Membership</h1>
                            <p class="lead fw-normal text-white-50 mb-0">RentalAja has thousands of new releases and classics available to rent for Xbox Series X, Xbox One, Xbox 360, PS5, PS4, PS3, PS Vita, Switch, Wii U, and 3DS, as well as older systems, 4k, Blu-ray and DVD. If you like a game so much that you don't want to send it back, you can Keep it for a low used price. There are never any due dates or late fees.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-dark">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h1 class="fw-bolder text-white">Our team</h1>
                        <p class="lead fw-normal text-white-50 mb-5">Dedicated to quality and your success</p>
                    </div>
                    <div class="row gx-2 row-cols-1 row-cols-sm-2 row-cols-xl-5 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder text-white">Clario Johan</h5>
                                <div class="fst-italic text-white-50">Founder &amp; CEO</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder text-white">Mario Rufisanto</h5>
                                <div class="fst-italic text-white-50">CFO</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder text-white">Raymond Nolasco</h5>
                                <div class="fst-italic text-white-50">CFO</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder text-white">Ivan</h5>
                                <div class="fst-italic text-white-50">Operations Manager</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder text-white">Crisdeo Nuel</h5>
                                <div class="fst-italic text-white-50">Operations Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>
    </body>
</html>
