<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>StasionGames - The heaven of games</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body class="d-flex flex-column bg-dark">
    <section style="background-color: rgb(66, 66, 66)">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <div class="container-fluid ms-3">
                <a class="navbar-brand" href="/"><img
                        src="{{url('/images/logo.png')}}"
                        alt="" style="width: 7.5em; border-radius: 0.5em" /></a>
            </div>
            <div class="d-flex justify-content-end me-3">
            <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    
                        @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="/carts"><i
                                    class="fa-solid fa-cart-shopping px-2"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="/transactions"><i 
                                    class="fas fa-receipt px-2"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active px-2" aria-current="page" href="/account"><i
                                    class="fa-solid fa-user px-2"></i></a>
                        </li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger px-2">
                                <i class="fa-solid fa-right-from-bracket px-2"></i>
                            </button>
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="/register">Register</a>
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
                            hands of the gamers who love 'em. StasionGames also sells new consoles, controllers, games,
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
                        <p class="lead fw-normal text-white-50 mb-0">StasionGames has thousands of new releases game 
                            for Xbox Series X, Xbox One, Xbox 360, PS5, PS4, Nintendo Switch. There are special offers for membership, namely getting cheap game prices and getting a 3-month game guarantee for free.</p>
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
                                src="https://media-exp1.licdn.com/dms/image/C5603AQGnk5VtHtCxbg/profile-displayphoto-shrink_800_800/0/1631979065826?e=1675900800&v=beta&t=1_V75K_1-U80ZhqA6vHKVipw5vXb-DAJ2mNNgy0UGuw"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Ivan</h5>
                            <div class="fst-italic text-white-50">Operations Manager</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://media-exp1.licdn.com/dms/image/C4D03AQESbvZCocgP_g/profile-displayphoto-shrink_800_800/0/1611598833728?e=1675900800&v=beta&t=RoTrYp-tTwLfaTrHI2ZdenSpO_P5a1A8IgBnrS4qTbs"
                                alt="..." />
                            <h5 class="fw-bolder text-white">Crisdeo Nuel</h5>
                            <div class="fst-italic text-white-50">Operations Manager</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <footer id="footer">
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
                            <h4>Our Platform Game</h4>
                            <ul>
                                <li>
                                    <!-- <i class="bx bx-chevron-right"></i> -->
                                    <a href="#">Playstation</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Nintendo Switch</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Xbox</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Personal Computer</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                Kemanggisan Raya <br />
                                Jakarta, JKT 809413 <br />
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
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" class="facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="linkedin">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright 2022
                    <strong> <span>StasionGames </span> </strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by
                    <a href="/dashboard">StasionGames</a>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>
</body>

</html>