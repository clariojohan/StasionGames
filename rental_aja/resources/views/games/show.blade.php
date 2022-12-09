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
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/game-controller-458109.png">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body class="bg-dark">
    <!-- Navigation-->
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

    <!-- Product section-->
    <div class="py-5"></div>
    <section class="py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5">
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
                            <div class="carousel-inner border">
                                @foreach ($game->gameImages as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100 h-auto border" alt="">
                                </div>
                                @endforeach
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
                    <div class="small mb-1 text-white-50">
                        @foreach ($game->platforms as $platform)
                        {{ $platform->name . ' '}}
                        @endforeach
                    </div>
                    <h1 class="display-5 fw-bolder text-white">{{ $game->title }}</h1>
                    <div class="medium mb-1 text-white-50">Released {{ $game->release_date }}</div>
                    <div class="small mb-5 text-white">
                        @foreach ($game->genres as $genre)
                        {{ $genre->name . ' '}}
                        @endforeach
                    </div>
                    <div class="fs-1 mb-5 text-white">
                        <span>${{ $game->price }}</span>
                    </div>
                    @if (Auth::check() && Auth::user()->role === 'user')
                    <form method="POST" action="{{ route('carts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name='game_id' value="{{ $game->id }}" hidden>
                        <div class="" style="display: flex">
                            <select name="type" id="type"
                                class="px-5 mb-2 w-auto h-auto justify-content-end align-items-center" style="text-align: center;">
                                <option value="Physical" style="text-align: center;">Physical</option>
                                <option value="Digital" style="text-align: center;">Digital</option>
                            </select>

                            {{-- <div class="mx-1">
                                <input type="radio" class="btn-check btn btn-outline-light" name="type" value="Physical"
                                    id="option1" autocomplete="checked" placeholder="Physical">
                                <!-- <label class="btn btn-outline-light" for="option1">Physical</label> -->
                            </div>
                            <div class="mx-1">
                                <input type="radio" class="btn btn-outline-light" name="type" value="Digital"
                                    id="option2" autocomplete="off" placeholder="Digital">
                                <!-- <label class="btn btn-outline-light" for="option2">Digital</label> -->
                            </div> --}}

                            
                            <div class="input-group w-50 justify-content-end align-items-center mb-2 ms-4">
                                <input type="number" placeholder="quantity" name="quantity"
                                    class="quantity-field form-control input-number" value="" min="1" max="10" style="text-align: center;">
                            </div>
                        </div>
                        <button class="btn btn-outline-light flex-shrink-0 w-100">
                            <i class="fa-solid fa-cart-shopping me-1"></i>
                            Add to cart
                        </button>
                    </form>
                    @endif
                    @if (Auth::check() && Auth::user()->role === 'admin')
                    <h2 class="mt-5" style="color: white;">Admin Feature</h2>
                    <div class="w-auto" style="display: flex">
                        <a href="/games/create">
                            <button class="btn btn-outline-light mx-1"><i class="fa-solid fa-plus"></i> Add
                                Game</button>
                        </a>
                        <a href="/games/{{ $game->id }}/edit">
                            <button class="btn btn-outline-light mx-1"><i class="fa-solid fa-gears"></i> Update</button>
                        </a>
                        <form method="POST" action="/games/{{ $game->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-light mx-1"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div class="container px-4 px-lg-5 my-2">
            <div class="col mb-1">
                <h3 class="fw-bolder mb-4 text-white">Description</h3>
                <p class="medium mb-4 text-white-50">{{ $game->description }}</p>
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
                    <p class="medium mb-4 text-white-50">{{ $game->publisher->name }}</p>
                    <p class="medium mb-4 text-white-50">{{ $game->rating }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
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
    <!-- Core theme JS-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>