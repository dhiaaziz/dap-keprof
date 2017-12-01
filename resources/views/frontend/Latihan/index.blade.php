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
        .hehe img{
          display: block;
          height: 100%;
          margin: 0 auto;
          /*vertical-align: middle;*/
          /*width: 100%;*/
        }
        .hehe{
          height: 350px;
        }
        .tags{
          /*text-align: right;*/

        }
        .tags span{
          background-color: rgb(30, 26, 150);
          padding: 5px;
          border-radius: 10%;
          color: #ffffff;
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
                    <div class="view overlay hm-white-light z-depth-1-half hehe">
                        <img src="{{ asset('storage/images/latihan/'.$lat->gambar) }}" class="img-fluid" alt="">
                        <div class="mask"></div>
                    </div>
                </div>
                <!--/.Featured image-->

                <!--Post excerpt-->
                <div class="col-lg-5">
                  <div class="tags">
                    <p>TAGS : <span style="background-color:#{{$lat->warna}}">{{ $lat->bahasa }}</span></p>
                  </div>
                    <a href="#!"><h2 class="post-title font-bold">{{$lat->nm_latihan}}</h2></a>
                    <p class="my-4"> {!!$lat->sl_latihan!!}</p>
                        <a href="{{url('/frontend/latihantampil/'.$lat->id)}}" class="btn btn-primary">Mulai Latihan</a>
                    </div>
                </div>
                <!--/.Post excerpt-->

            <!--/.First row-->
            <hr class="extra-margin my-5">
            @endforeach
            </div>
            <!-- Endcontainer -->

            <br>
            <hr>

            <!--Pagination-->
            <nav class="row flex-center wow fadeIn" data-wow-delay="0.2s">
                @if($Latihan->hasPages())
                {{ $Latihan->links() }}
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
            $("#nav-latihan").addClass("active");
        })
    </script>
@endsection
