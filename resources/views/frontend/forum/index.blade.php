@extends('frontend.layouts.master')

@section('title')
Forum
@endsection

@section('more-style')
<!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .jumbotron {
            text-align: center;
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
        .btn .fa{
          margin-left: 5px;
        }

        .btn-outline-unique{
          background-color: #FFEB3B;
          color: #fff!important;
          border-color: #FFEB3B;
        }
        .btn-outline-unique:hover{
          border-color: #FFF176;
          background-color: #FFF176;
          /*color: #33b5e5!important;*/
        }
        .btn-outline-unique:active{
          border-color: #FFF176!important;
          background-color: #FFF176;
          /*color: #33b5e5!important;*/
        }
        .btn-unique{
          background-color: #33b5e5;
          color: #fff;
        }
        .btn-unique:hover{
          border-color: #BBDEFB!important;
          background-color: #81D4FA!important;
          /*color: #33b5e5!important;*/
        }
        .tags{
          text-align: right;

        }
        .tags span{
          background-color: rgb(30, 26, 150);
          padding: 5px;
          border-radius: 10%;
          color: #ffffff;
        }
        .card-body{
          /*text-align: center;*/
          /*padding-top: 0px;*/
        }
        .card-body a{
          float: right;
        }
        .comments-count{
          float: left;
        }
        .keterangan p{
          margin-bottom: 2px!important;
          line-height: 1rem;
        }
        .keterangan{
          margin-bottom: 25px;
          margin-top: 0px;
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
            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2 class="h2-responsive">Selamat datang di forum kami</h2>
                        <br>
                        <p>Tanyakan sesuatu atau bagikan pengetahuan kamu disini!</p>
                        <hr>
                        <p>Klik tombol sebelah kiri untuk mulai bertanya dan kanan untuk membagikan pengetahuanmu</p>
                        @if (Auth::guest())
                        <p>SILAHKAN LOGIN TERLEBIH DAHULU UNTUK MEMULAI BERTANYA ATAU MEMBAGIKAN SESUATU</p>
                        @else
                        <a href="/frontend/forum/tanya" class="btn btn-outline-unique" rel="nofollow">Tanya <i class="fa fa-question" aria-hidden="true"></i></a>
                        <a href="/frontend/forum/bagi" class="btn btn-unique btn-ptc" rel="nofollow">Bagi <i class="fa fa-hand-paper-o" aria-hidden="true"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <!--/.First row-->

            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
                <!--First columnn-->
                @foreach($forums as $forum)
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card wow fadeIn" style="width: 22rem; margin : auto;" data-wow-delay="0.2s">


                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <div class="tags">
                              <p><span style="background-color:#000">{{$forum->kategori}}</span></p>
                            </div>
                            <h4 class="card-title">{{ $forum->judul_forum }} </h4>
                            <div class="keterangan">
                              <p class="card-text ">oleh      : <span>{{$forum->name}}</span></p>
                              <p class="card-text">pada       :<span> {{$forum->created_at}}</span></p>
                            </div>
                            <!--Text-->
                            <p class="card-text comments-count"><i class="fa fa-commenting-o" aria-hidden="true"></i> 0 Comment</p>
                            <a href="{{url('/frontend/forum/tampil/'.$forum->id)}}" class="btn btn-primary btn-tengah">MASUK</a>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
                @endforeach


            </div>
            <!--/.Second row-->
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
            $("#nav-forum").addClass("active");
            $(".card-body > p").addClass("card-text")
        })
    </script>
@endsection
