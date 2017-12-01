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
            /*background-color: #fafafa*/
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
        .test-image{
            padding: 10px;
            height: 250px;
            vertical-align: middle;
            text-align: center;
            /*max-height: 20px;*/
            display: inline-block;
            /*border: 1px solid blue*/
        }
        .test-image img{
            /*max-height: 350px;*/
            height: 100%;
            margin: 0px auto;
        }

        .card-body{
          text-align: center;
          padding-top: 0px;
        }
        .card-body .btn{
           display: inline-block;
           margin: 0 auto;
           /*background-color: #ffaffa*/
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
        .pilih-bahasa p{
          display: inline;
          margin-right: 15px;
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
                    <h1 class="h1-responsive">Daftar Materi
                    </h1>
                    <!-- <small class="text-muted">Belajar dasar algoritma dan pemrograman dengan bahasa yang kamu sukai :)</small> -->
                    <div class="pilih-bahasa">
                      <p>Filter Bahasa</p>
                      <select class="mdb-select">
                        <option value="" disabled selected>All</option>
                        @foreach
                        
                        @endforeach
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>

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
                        <div class="test-image">
                            <!--Card image-->
                            <img class="img-fluid" src="{{ asset('storage/images/materi/'.$materi->gambar) }}" alt="{{ $materi->gambar}}">
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <div class="tags">
                              <p>TAGS : <span style="background-color:#{{$materi->warna}}">{{ $materi->bahasa }}</span></p>
                            </div>
                            <h3 class="card-title">{{ $materi->nm_Materi }}</h3>
                            <!--Text-->
                            <?php $i = str_limit($materi->isi_Materi,10); ?>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="{{url('/frontend/submateri/'.$materi->id)}}" class="btn btn-primary">Pilih</a>
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
                @if($Materi->hasPages())
                {{ $Materi->links() }}
                @endif
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
