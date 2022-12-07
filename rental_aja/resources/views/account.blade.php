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
    <title>Account - StasionGames</title>

</head>

<body>
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
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="avatar-main">
                                <img src="{{asset('storage/'.$avatar)}}" alt="avatar" class="rounded-circle img-fluid avatar-photo" />
                                <div class="photo-upload">
                                    <form action="{{  route('edit-avatar') }}" method="POST" enctype="multipart/form-data"
                                    style="">
                                        @csrf @method('patch')
                                        <input type="file" class="form-control" id="customFile avatar" name="avatar" style="width: 108px;">
                                        <!-- <input type="file" title="" name="avatar" id="avatar"> -->
                                        <input type="submit" value="Upload">
                                    </form>
                                </div>
                            </div>

                            {{-- form input avatar --}}
                            <!-- <form action="{{  route('edit-avatar') }}" method="POST" enctype="multipart/form-data"
                                style="">
                                @csrf @method('patch')
                                <input type="file" name="avatar" id="avatar">
                                <input type="submit" value="Upload">
                            </form> -->
                            <h5 class="my-3">{{$name}}</h5>
                            <div class="d-flex justify-content-center mb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$name}}</p>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$email}}</p>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$phone}}</p>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-4">
                                <span class="text-primary font-italic me-1">Achievement</span> [ Status Report ]
                            </p>
                            <p class="mb-1" style="font-size: 0.77rem">Most Active</p>
                            <div class="progress rounded" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: 0.77rem">Duration Play Time</p>
                            <div class="progress rounded" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: 0.77rem">Most Expensive Bought Game</p>
                            <div class="progress rounded" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: 0.77rem">Current Total Games</p>
                            <div class="progress rounded" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>
<script src="https://kit.fontawesome.com/1708e63c1c.js" crossorigin="anonymous"></script>

</html>