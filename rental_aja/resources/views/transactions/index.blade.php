<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transactions - StasionGames</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="bg-dark">
<<<<<<< HEAD
    <section style="background-color: rgb(66, 66, 66)">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <div class="container-fluid ms-3">
                <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt=""
                        style="width: 7.5em; border-radius: 0.5em" /></a>
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

    <!-- List Product Cart-->
    <ul class="card mt-5 p-5 list-group">
        @if ($transactions->count() < 1) <li class="list-group-item d-flex align-items-center justify-content-center"
            style="height: 20em;">
            <h1 class="text-center">Your Transaction is Empty :'(</h1>
            </li>
            @else
            @foreach ($transactions as $transaction)
            <li class="list-group-item p-3 d-flex">
                <div class="container d-flex flex-column gap-2">
                    <h5 class="card-subtitle">Transaction Id: {{$transaction->id}}</h5>
                    @if ($transaction->status === 'paid')
                    <p class="card-subtitle text-muted">Invoice: {{$transaction->payment->invoice}}</p>
                    @endif
                    <p class="card-subtitle text-muted">Status: {{$transaction->status}}</p>
                    <p class="card-subtitle text-muted">Game List</p>
                    @foreach ($transaction->items as $item)
                    <p class="card-subtitle text-muted">- {{$item->game->title}}</p>
                    @endforeach
                    <p class="card-subtitle text-muted">Total Price: ${{$transaction->total_price}}</p>
                </div>
                <a class="me-md-2 w-25 h-25" href="/transactions/{{$transaction->id}}" style="text-decoration:none;">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-outline-primary" type="button">
                            Details
                        </button>
                    </div>
                </a>
            </li>
            @endforeach
            @endif
    </ul>

    <footer id="footer">
=======
    <!-- Navigation-->
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

    <!-- List Product Cart-->
    <ul class="card mt-5 p-5 list-group">
        @foreach ($transactions as $transaction)
        <li class="list-group-item p-3 d-flex">
            <div class="container d-flex flex-column gap-2">
                <h5 class="card-subtitle">Transaction Id: {{$transaction->id}}</h5>
                @if ($transaction->status === 'paid')
                <p class="card-subtitle text-muted">Invoice: {{$transaction->payment->invoice}}</p>
                @endif
                <p class="card-subtitle text-muted">Status: {{$transaction->status}}</p>
                <p class="card-subtitle text-muted">Game List</p>
                @foreach ($transaction->items as $item)
                <p class="card-subtitle text-muted">- {{$item->game->title}}</p>
                @endforeach
                <p class="card-subtitle text-muted">Total Price: ${{$transaction->total_price}}</p>
            </div>
            <a class="me-md-2 w-25 h-25" href="/transactions/{{$transaction->id}}">
                <button class="btn btn-primary" type="button">
                    Details
                </button>
            </a>
        </li>
        @endforeach
    </ul>

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
<<<<<<< HEAD
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
=======
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
>>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
<<<<<<< HEAD
                            Kemanggisan Raya <br />
                            Jakarta, JKT 809413 <br />
=======
                            Kemanggisan <br />
                            Bekasi, JKT 809413 <br />
>>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
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
<<<<<<< HEAD
                &copy; Copyright 2022
=======
                &copy; Copyright
>>>>>>> 8cc302b615af3b31eb7140be0aa3ef315455b6b9
                <strong> <span>StasionGames </span> </strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="/dashboard">StasionGames</a>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>