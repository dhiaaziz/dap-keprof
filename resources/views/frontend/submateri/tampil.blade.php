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
        .kotak{
        	display: inline-block;
        	height: auto;
        	width: auto;
          padding: 5px;
        }
        .kotak img{
        	width: 100%;
        }
        .tags{
          background-color: rgb(30, 26, 150);
          padding: 3px;
          border-radius: 10%;
          color: #ffffff;
          font-size: 0.75em;
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
            <div class="row">


                <!--Main column-->
                <div class="col-lg-12">
                  <!-- CARD -->
                  <!-- <div class="card">
                    <div class="card-body"> -->
                      <!--First row-->
                      <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">
                          <!--Product-->
                          <div class="product-wrapper">
                            <h1 class="h1-responsive font-bold mt-4">{{ $materi->nm_Materi }}</h1>
                            <hr>
                            <hr>
                            <div class="view overlay hm-white-light z-depth-1-half">
                              <div class="mask">
                              </div>
                              <!-- <h3 class="price"><span class="badge red darken-2">10 $</span></h3> -->
                            </div>
                            <!--/.Featured image-->
                            <br>
                            <!--Product data-->
                            <p>{!! $materi->isi_Materi !!}</p>
                            <div class="kotak">
                                <img src="{{ asset('storage/images/materi/'.$materi->gambar) }}" alt="">
                              </div>
                            @foreach ($submateri as $submateri)
                            <!--Featured image-->
                            <div class="view overlay hm-white-light z-depth-1-half">
                              <div class="mask">
                              </div>
                              <!-- <h3 class="price"><span class="badge red darken-2">10 $</span></h3> -->
                            </div>
                            <!--/.Featured image-->

                            <br>

                            <!--Product data-->

                            <h3 class="h3-responsive font-bold mt-4">{{ $submateri->nm_Sub }}</h3>
                            <p>{!! $submateri->isi_Sub !!}</p>
                            <div class="kotak">
                                <img src="{{ asset('storage/images/SubMateri/'.$submateri->gmbr_Sub) }}" alt="">
                              </div>
                            @endforeach
                          </div>
                          <!--Product-->
                        </div>
                      </div>

                    <!-- </div>
                  </div> -->
                  <!--/.Card  -->

               </div>
                <!--/.Main column-->
                <!--Sidebar-->
               <!--/.Sidebar-->

            </div>
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

@endsection
