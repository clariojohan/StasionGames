<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Payment - StasionGames</title>

</head>

<body>

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
        <div>
            <ul class="card mt-5 p-5 list-group">
                <h3 class="text-center mb-4">Payment</h3>
                @foreach ($transaction->items as $item)
                <li class="list-group-item">
                    <div class="w-100 d-flex flex-row align-items-center my-2 gap-3">
                        <img src="{{asset('storage/'.$item->game->gameImages->first()->path)}}" class="img-thumbnail"
                            alt="" width="100px" />
                        <div class="container d-flex flex-column gap-2">
                            <p class="card-subtitle text-muted">Title: {{$item->game->title}}</p>
                            <p class="card-subtitle text-muted">Type: {{$item->type}} Edition</p>
                            <p class="card-subtitle text-muted">Price: ${{$item->game->price}}</p>
                            <p class="card-subtitle text-muted">Quantity: {{$item->quantity}}</p>
                            <p class="card-subtitle text-muted">Total Price: ${{$item->game->price * $item->quantity}}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
                <li class="list-group-item py-3">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <p class="card-subtitle">Transaction ID: {{ $transaction->id }}</p>
                    @if ($transaction->status === 'paid')
                    <p class="card-subtitle">Invoice: {{$transaction->payment->invoice}}</p>
                    @endif
                    <p class="card-subtitle">Address: {{ $transaction->address}}</p>
                    <p class="card-subtitle">Delivery: {{ $transaction->delivery }}</p>
                    <p class="card-subtitle">Payment Status: {{ $transaction->status }}</p>
                    <p class="card-subtitle">Total Cart: ${{ $transaction->total_price }}</p>
                    @if ($transaction->status === 'unpaid')
                    <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" class="pt-3">
                        @csrf
                        @method('PUT')
                        <label for="" class="form-label">Payment Type</label>
                        <select class="form-select" name="payment_type" aria-label="Default select example">
                            <option value="Bank">Bank</option>
                            <option value="E-Money">E-Money</option>
                        </select>
                        <button class="btn btn-primary w-100 mt-3" type="submit">Pay</button>
                    </form>
                    @endif
                </li>
            </ul>
        </div>
    </section>

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
                &copy; Copyright
                <strong> <span>StasionGames </span> </strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="/dashboard">StasionGames</a>
            </div>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>