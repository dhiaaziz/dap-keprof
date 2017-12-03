@extends('frontend.layouts.master')

@section('html-class')
class="full-height"
@endsection

@section('title')
TheArgorithm
@endsection
@section('more-style')
<!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view,
        .full-height body .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view,
            .full-height body .view {
                height: 700px;
            }
        }

        @media (min-width: 1000px) and (max-width: 1025px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view,
            .full-height body .view {
                height: 770px;
            }
        }

        .navbar {
            background-color: transparent;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        footer.page-footer {
            background-color: #1C2331;
            margin-top: 0;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /* Carousel*/

        .flex-center {
            color: #fff;
        }

        .carousel-caption {
            height: 100%;
            padding-top: 7rem;
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
    @include('frontend.layouts.header')
@endsection

@section('content')
 <!--Carousel Wrapper-->
    <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
            <li data-target="#video-carousel-example2" data-slide-to="1"></li>
            <li data-target="#video-carousel-example2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <!--Mask color-->
                <div class="view hm-black-light">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="{{ asset('video/materi.mp4') }}" type="video/mp4" />
                    </video>
                    <div class="full-bg-img"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="flex-center animated fadeIn">
                        <ul>
                            <li>
                                <h1 class="h1-responsive">Materi Dasar Algoritma Pemograman</h1></li>
                            <li>
                                <p>Daftar untuk mendapatan akses penuh</p>
                            </li>
                            <li>
                                <a target="_blank" href="/login" class="btn btn-primary btn-lg" rel="nofollow" style= "display: <?php if (Auth::user()) echo 'none'; ?> ">Daftar</a>
                                <!-- <a target="_blank" href="/login" class="btn btn-default btn-lg" rel="nofollow">Learn more</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Caption-->
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view hm-blue-slight">
                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="{{ asset('video/latihan.mp4') }}"  type="video/mp4" />
                    </video>
                    <div class="mask"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="flex-center animated fadeInDown">
                        <ul>
                            <li>
                                <h1 class="h1-responsive">Latihan Dasar Algoritma Pemograman</h1>
                            </li>
                            <li>
                                <p>Tidak ada kata terlambat untuk belajar</p>
                            </li>
                            <li>
                                <a target="_blank" href="/frontend/latihan" class="btn btn-primary btn-lg" rel="nofollow">Mulai Latihan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Caption-->
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view hm-black-light">
                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="{{ asset('video/us.mp4')  }}" type="video/mp4" />
                    </video>
                    <div class="mask"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="flex-center animated fadeInDown">
                        <ul>
                            <li>
                                <h1 class="h1-responsive">Kunjungi Forum Kami</h1></li>
                            <li>
                                <p>Komunitas kami dapat membantu anda dengan pertanyaan apapun</p>
                            </li>
                            <li>
                                <a target="_blank" href="/frontend/forum" class="btn btn-default btn-lg" rel="nofollow">Mulai Forum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Caption-->
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <!--/.Main layout-->
@endsection
