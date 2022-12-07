<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon-->
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>StasionGames - The heaven of games</title>
</head>

<body class="d-flex flex-column bg-dark">
    <!-- Navigation-->
    <section style="background-color: rgb(66, 66, 66)">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img
                        src="{{url('/images/logo.png')}}"
                        alt="" style="width: 7.5em; border-radius: 0.5em" /></a>
            </div>
            <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/carts"><i
                                    class="fa-solid fa-cart-shopping"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active px-2" aria-current="page" href="/account"><i
                                    class="fa-solid fa-user px-2"></i></a>
                        </li>
                        @if (Auth::check())
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

    <!-- Banner -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5 pt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active mx-auto" style="width = 270px;">
                <center><img src="{{url('images/banner/a.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
                <center><img src="{{url('images/banner/b.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/c.png')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/d.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/e.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/f.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/g.png')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/h.png')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
            <div class="carousel-item">
            <center><img src="{{url('images/banner/i.jpg')}}"
                        class="d-block w-95" height="480px" width="720px" /></center>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="" style="margin: 0 2rem">
        <p class="h4 text-white p-4">Featured Game</p>
        <div class="card-group">
            @foreach ($games as $game)
            <div class="col mb-5 px-3">
                <div class="card bg-dark border-secondary" style="width: 12rem">
                    <a href="#">
                        <img class="card-img-top" src="{{ asset('storage/' . $game->gameImages->first()->path) }}"
                            alt="" /></a>
                    <div class="card-body px-4 py-2">
                        <div class="text-center">
                            <h5 class="fw-bolder text-white">{{ $game->title }}</h5>
                            <p class="text-white-50">${{ $game->price }}</p>
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto mb-2" href="/games/{{ $game->id }}">Show
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
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