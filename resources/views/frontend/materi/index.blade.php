<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/frontend/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/frontend/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            margin-top: 3rem;
        }

        main .card {
            margin-bottom: 2rem;
        }

        @media only screen and (max-width: 768px) {
            .read-more {
                text-align: center;
            }
        }

        .navbar {
            background-color: #0f6256;
        }

        footer.page-footer {
            background-color: #0f6256;
            margin-top: 2rem;
        }
         .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

    </style>

</head>

<body>

    <header>
        <!--Navbar-->
           <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">DAPEUY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Materi<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Latihan</a>
                        </li>
                        <!-- <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="#">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Register</a>
                      </li>
                    </ul>
                </div>
                </div>
            </nav>
        <!--/.Navbar-->
    </header>

    <main>
        <!--Main layout-->
        <div class="container">

            <!--Page heading-->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1-responsive">Bahasa Pemograman
                    </h1>
                    <small class="text-muted">Belajar dasar algoritma dan pemrograman dengan bahasa yang kamu sukai :)</small>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row mt-5 wow">
                @foreach ($Materi as $materi)
                <!--First column-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(43).jpg" alt="{{ $materi->gambar}}">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">{{ $materi->nm_Materi }}</h4>
                            <!--Text-->
                            {{$materi->isi_Materi}}
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pilih</a>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--/.First column-->
                @endforeach

            </div>
            <!--/.First row-->

            <hr>

            <!--Pagination-->
            <nav class="row flex-center wow fadeIn" data-wow-delay="0.2s">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#!" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#!">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">4</a></li>
                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#!" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--/.Pagination-->
        </div>
        <!--/.Main layout-->
    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">
        <!--Footer links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">About Us</h5>
                    <p>DAPEUY adalah </p>
                    <p>Kami</p>
                </div>
                <!--/.First column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Judul</h5>
                    <!-- <ul>
                        <li>
                            <a href="#!">"Cooking A-Z" by Mike Kalynsky</a>
                        </li>
                        <li>
                            <a href="#!">"No More Heat" by Joe Doe</a>
                        </li>
                        <li>
                            <a href="#!">"Sea Food for Starters" by Alex Well</a>
                        </li>
                        <li>
                            <a href="#!">"Easy Calories" by Samantha Bens</a>
                        </li>
                    </ul> -->
                </div>
                <!--/.Second column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Judul</h5>
                    <!-- <ul>
                        <li>
                            <a href="#!">Beff steak with almonds</a>
                        </li>
                        <li>
                            <a href="#!">Cordon Bleu</a>
                        </li>
                        <li>
                            <a href="#!">Vegan pancakes</a>
                        </li>
                        <li>
                            <a href="#!">Turkey stuffed sandwiches</a>
                        </li>
                    </ul> -->
                </div>
                <!--/.Third column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Find us on</h5>
                    <ul>
                        <li>
                            <a href="#!">Facebook</a>
                        </li>
                        <li>
                            <a href="#!">Youtube</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Pinterest</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->
        <!-- <hr> -->
        <!--Call to action-->
        <!-- <div class="call-to-action">
            <h4 class="mb-5">Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5>
                </li>
                <li>
                    <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-deep-orange waves-effect waves-light" rel="nofollow">Sign up!</a>
                </li>
                <li>
                    <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary waves-effect waves-light" rel="nofollow">Learn more</a>
                </li>
            </ul>
        </div> -->
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="containter-fluid">
                © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="{{ asset('js/frontend/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/frontend/mdb.min.js') }}"></script>

    <script>
    new WOW().init();
    </script>

</body>

</html>
