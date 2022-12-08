<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>StasionGames - The heaven of games</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body class="d-flex flex-column bg-dark">
    <!-- Navigation-->
    <section style="background-color: rgb(66, 66, 66)">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img
                        src="https://cdn.discordapp.com/attachments/1027576200786358364/1049697278476173412/qlogo2.png"
                        alt="" style="width: 7.5em; border-radius: 0.5em" /></a>
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
    </section>

         <!-- Header-->
        <div class="py-5"></div>
        <header class="py-2">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3 text-white"> We provide the most convenient way to play a wide
                                range
                                of console games.</h1>
                            <p class="lead fw-normal text-white-50 mb-4">StasionGames was built on the idea that
                                quality,
                                functional games should be available to everyone. Use our services and support us by
                                purchasing one of our premium products or services.</p>
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
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                            src="https://www.cnet.com/a/img/resize/a6b4d6fc477ca85946c288fc2944e01358ea5c77/hub/2022/10/30/9cb9dc86-2004-4e99-8a6c-cdadade7bcb3/mariorabbids.jpg?auto=webp&fit=crop&height=675&width=1200"
                            alt="..." /></div>
                    <div class="col-lg-6">
                        <h1 class="fw-bolder text-white">What we do</h1>
                        <p class="lead fw-normal text-white-50 mb-0 ">StasionGames puts video games where they belong—in
                            the
                            hands of the gamers who love 'em. RentalAja also sells new consoles, controllers, games,
                            accessories and collectibles, as well as an extensive selection of gently used titles from
                            our
                            rental library, almost always complete with original case, artwork, codes and inserts. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-1">
            <div class="container px-5 my-1">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0"
                            src="https://media.wired.com/photos/6137a984547e689bee6d4d28/master/w_1920,h_1080,c_limit/Gear-PC-Games-You-Can-Play-Forever-Fortnite_SOURCE_Epic_Games.jpg"
                            alt="..." /></div>
                    <div class="col-lg-6">
                        <h1 class="fw-bolder text-white">Membership</h1>
                        <p class="lead fw-normal text-white-50 mb-0">StasionGames has thousands of new releases and
                            classics
                            available to rent for Xbox Series X, Xbox One, Xbox 360, PS5, PS4, PS3, PS Vita, Switch, Wii
                            U,
                            and 3DS, as well as older systems, 4k, Blu-ray and DVD. If you like a game so much that you
                            don't want to send it back, you can Keep it for a low used price. There are never any due
                            dates
                            or late fees.</p>
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
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://media-exp1.licdn.com/dms/image/C4D03AQF-WDtQfwHnOw/profile-displayphoto-shrink_800_800/0/1607153241527?e=2147483647&v=beta&t=oMR5L8u9WhmTmpWAD5IPAk7E_XqCD7dLZt4p3annyFo"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Clario Johan</h5>
                            <div class="fst-italic text-white-50">Founder &amp; CEO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://media-exp1.licdn.com/dms/image/D5603AQEMxsIzUMdC2w/profile-displayphoto-shrink_800_800/0/1663345968315?e=2147483647&v=beta&t=iRUkOxkjZgJMiFaRnmV50CBLm3aBZazjVoDX-pZsYxY"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Mario Rufisanto</h5>
                            <div class="fst-italic text-white-50">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://media-exp1.licdn.com/dms/image/C4D03AQGVl7RdYZVshA/profile-displayphoto-shrink_800_800/0/1657134605623?e=2147483647&v=beta&t=Tr50jgiR_ky9nH9hG77Bi-bA0TGYROMZFRZ-S6le5m0"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Raymond Nolasco</h5>
                            <div class="fst-italic text-white-50">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://media-exp1.licdn.com/dms/image/D5635AQGAnbjqCnFEnQ/profile-framedphoto-shrink_800_800/0/1667306826409?e=1670954400&v=beta&t=YlH8Ube_Z9DkkFXAhrAFKwMNGAyb5xKoQD3CRT8ihw4"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Ivan</h5>
                            <div class="fst-italic text-white-50">Operations Manager</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="data:image/jpeg;base64,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"
                                alt="..." />
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
                                <strong>Email: </strong> stasion@games.com
                                <br />
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>About StasionGames</h3>
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
                    <strong> <span>StasionGames </span> </strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by
                    <a href="/dashboard">StasionGames</a>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>
</body>

</html>