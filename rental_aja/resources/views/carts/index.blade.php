<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Carts - StasionGames</title>
</head>

<body class="d-flex flex-column bg-dark">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Navigation-->
    <section style="background-color: rgb(66, 66, 66)">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <<<<<<< HEAD <div class="container-fluid ms-3">
                <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt=""
                        style="width: 7.5em; border-radius: 0.5em" /></a>
                </div>
                <div class="d-flex justify-content-end me-3">
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">

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
                                =======
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="/"><img
                                            src="https://cdn.discordapp.com/attachments/1027576200786358364/1049697278476173412/qlogo2.png"
                                            alt="" style="width: 7.5em; border-radius: 0.5em" /></a>
                                    <div class="collapse navbar-collapse" id="navbarScroll">
                                        <form class="d-flex">
                                            <input class="form-control me-2" type="search" placeholder="Search"
                                                aria-label="Search" />
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                                            style="--bs-scroll-height: 100px">
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="/carts"><i
                                                        class="fa-solid fa-cart-shopping"></i></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/account"><i
                                                        class="fa-solid fa-user"></i></a>
                                                >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                                            </li>
                                            @if (Auth::check())
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <<<<<<< HEAD <button type="submit" class="btn btn-danger px-2">
                                                    <i class="fa-solid fa-right-from-bracket px-2"></i>
                                                    =======
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa-solid fa-right-from-bracket"></i>
                                                        >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                                                    </button>
                                            </form>
                                            @else
                                            <li class="nav-item">
                                                <<<<<<< HEAD <a class="nav-link px-2" aria-current="page" href="/login">
                                                    Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-2" aria-current="page"
                                                    href="/register">Register</a>
                                                =======
                                                <a class="nav-link" aria-current="page" href="/login">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="/register">Register</a>
                                                >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
        </nav>
    </section>

    <!-- List Cart -->
    <ul class="card mt-5 p-5 list-group">
        @if ($cart_items->count() < 1) <li class="list-group-item d-flex align-items-center justify-content-center"
            style="height: 20em;">
            <h1 class="text-center">Your Cart is Empty</h1>
            </li>
            @else
            <form action="{{ route('transactions.create') }}" method="GET">
                @foreach ($cart_items as $cart_item)
                <li class="list-group-item">
                    <div class="w-100 d-flex flex-row align-items-center my-2 gap-3">
                        <input type="checkbox" class="form-check-input" name="item_id[]" id="item_id"
                            value="{{ $cart_item->id }}">
                        <img src="{{ asset('storage/' . $cart_item->game->gameImages->first()->path) }}"
                            class="img-thumbnail" alt="" width="200px" />
                        <div class="container d-flex flex-column gap-2">
                            <h4 class="card-title">{{ $cart_item->game->title }}</h4>
                            <p class="card-subtitle text-muted">Type: {{ $cart_item->type }} Edition</p>
                            <p class="card-subtitle text-muted">Price: ${{ $cart_item->game->price }}</p>
                            <p class="card-subtitle text-muted">Quantity: {{ $cart_item->quantity }}</p>
                            <p class="card-subtitle text-muted">
                                Total Price: ${{ $cart_item->game->price * $cart_item->quantity}}
                            </p>
                            <div class="container d-flex justify-content-end">
                                <a href="{{ route('games.show', $cart_item->game->id) }}">
                                    <<<<<<< HEAD <button class="btn btn-outline-info me-md-2" type="button">
                                        =======
                                        <button class="btn btn-secondary me-md-2" type="button">
                                            >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                                            Product Page
                                        </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                @endforeach
                <div class="d-grid gap-2 d-md-flex justify-content-md-end py-3 px-2">
                    <<<<<<< HEAD <button class="btn btn-outline-danger" type="submit" name='action' value='delete'>
                        Delete</button>
                        =======
                        <button class="btn btn-primary" type="submit" name='action' value='delete'>Delete</button>
                        >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                        <button class="btn btn-primary" type="submit" name='action' value='buy'>Buy</button>
                </div>
            </form>
            @endif
    </ul>

    <<<<<<< HEAD <footer id="footer">
        =======
        <!-- Footer -->
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
            >>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
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
                                    <i class="bx bx-chevron-right"></i>
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

        <!-- Bootstrap core JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>