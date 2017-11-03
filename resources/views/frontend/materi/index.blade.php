@extends ('frontend.layouts.master')

@section('title')
Materi
@endsection

@section('more-style')
<!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            margin-top: 3rem;
            background-color: #fafafa
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
            background-color: #1C2331;
        }

        footer.page-footer {
            background-color: #1C2331;
            margin-top: 2rem;
        }
         .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

    </style>
@endsection

@section('header')
    @include('frontend.layouts.header2')
@endsection

@section('content')
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
                        <img class="img-fluid" src="{{ asset('storage/images/materi/'.$materi->gambar) }}" alt="{{ $materi->gambar}}">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">{{ $materi->nm_Materi }}</h4>
                            <!--Text-->
                            {!! $materi->isi_Materi !!}
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
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
@endsection

@section('more-script')
    <script>
    new WOW().init();
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#nav-materi").addClass("active");
            $(".card-body > p").addClass("card-text");
        })
    </script>

    <script type="text/javascript">

    </script>
@endsection
