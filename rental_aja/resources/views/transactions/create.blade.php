<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Checkout</title>
</head>

<body class="d-flex flex-column bg-dark">
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

    <div>
        <ul class="card mt-5 p-5 list-group">
            <h3 class="text-center mb-4">Checkout</h3>
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                @foreach ($items as $item)
                <li class="list-group-item">
                    <div class="w-100 d-flex flex-row align-items-center my-2 gap-3">
                        <input type="text" name='item_id[]' value="{{ $item->id }}" hidden>
                        <img src="{{ asset('storage/' . $item->game->gameImages->first()->path) }}"
                            class="img-thumbnail" alt="" width="100px" />
                        <div class="container d-flex flex-column gap-2">
                            <p class="card-subtitle text-muted">Title: {{$item->game->title}}</p>
                            <p class="card-subtitle text-muted">Type: {{$item->type}}</p>
                            <p class="card-subtitle text-muted">Price: ${{$item->game->price}}</p>
                            <p class="card-subtitle text-muted">Quantity: {{$item->quantity}}</p>
                            <p class="card-subtitle text-muted">Total Price: ${{$item->game->price *
                                $item->quantity}}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
                <li class="list-group-item">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h5 class="card-title">Total Cart: ${{$totalCart}}</h5>
                    <label for="" class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                    <label for="" class="form-label">Delivery</label>
                    <select class="form-select" name="delivery" aria-label="Default select example">
                        <option value="JNE">JNE</option>
                        <option value="JNT">JNT</option>
                        <option value="SiCepat">SiCepat</option>
                    </select>
                    <button class="btn btn-primary w-100 mt-3" type="submit" name="action" value="pay-now">
                        Pay Now
                    </button>
                    <button class="btn btn-secondary w-100 mt-3" type="submit" name="action" value="pay-later">
                        Pay Later
                    </button>
                </li>
            </form>
        </ul>
    </div>


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
</body>

</html>