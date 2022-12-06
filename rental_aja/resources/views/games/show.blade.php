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
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="https://cdn.discordapp.com/attachments/1027576200786358364/1049697278476173412/qlogo2.png" alt=""
                        style="width: 7.5em; border-radius: 0.5em" /></a>
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
                                @foreach ($game->gameImages as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-50" alt="">
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
                    <div class="small mb-5 text-white-50">
                        @foreach ($game->genres as $genre)
                        <a href="">{{ $genre->name }}</a>
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
                                class="px-2 mb-2 w-auto h-auto justify-content-end align-items-center">
                                <option value="Physical">Physical</option>
                                <option value="Digital">Digital</option>
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


                            <div class="input-group w-50 justify-content-end align-items-center mb-2">
                                <input type="number" placeholder="quantity" name="quantity"
                                    class="quantity-field form-control input-number mx-2" value="" min="1" max="10">
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
                            <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a>
                            </div>
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
                            <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a>
                            </div>
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
                            <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a>
                            </div>
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
                            <div class="text-center"><a class="btn btn-outline-light mt-auto" href="#">View options</a>
                            </div>
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