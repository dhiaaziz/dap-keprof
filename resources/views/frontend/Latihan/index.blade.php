@extends('frontend.layouts.master')

@section('title')
Latihan
@endsection

@section('more-style')
 <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        main {
            margin-top: 3rem;
        }
        
        .lead {
            text-align: justify;
        }
        
        @media only screen and (max-width: 768px) {
            .post-title {
                margin-top: 1rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .read-more {
                text-align: center;
            }
        }
        
        .extra-margin {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        
        .navbar {
            background-color: #555658;
        }

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        
        footer.page-footer {
            background-color: #555658;
            margin-top: 2rem;
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
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12">
                    <h1 class="h1-responsive">Latihan
                        <small class="text-muted">TheAlgorithm</small>
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            @foreach($Latihan as $lat)
            <div class="row mt-5 wow fadeIn" data-wow-delay="0.2s">
                <!--Featured image-->
                <div class="col-lg-7">
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="{{ asset('storage/images/latihan/'.$lat->gambar) }}" class="img-fluid" alt="">
                        <div class="mask"></div>
                    </div>
                </div>
                <!--/.Featured image-->

                <!--Post excerpt-->
                <div class="col-lg-5">
                    <a href="#!"><h2 class="post-title font-bold">{{$lat->nm_latihan}}</h2></a>
                    <p class="my-4"> {{$lat->sl_latihan}}</p>
                        <a href="#!" class="btn btn-primary">Mulai Latihan</a>
                    </div>
                </div>
                <!--/.Post excerpt-->
            </div>
            <!--/.First row-->
            <hr class="extra-margin my-5">
            @endforeach

            
            <br>
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
@endsection
