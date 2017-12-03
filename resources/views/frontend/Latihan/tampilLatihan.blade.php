@extends ('frontend.layouts.master')

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
        .kotak{
        	display: inline-block;
          width: 100%;
          padding: 5px;
        }
        .kotak img{
          display: block;
          margin: 0px auto;
          height: 50%;
          width: 50%;
        }
        .tags{
          background-color: rgb(30, 26, 150);
          padding: 3px;
          border-radius: 10%;
          font-size: 0.75em;
          color: #ffffff;
        }
        .hide{
            display :none;

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
                            <h1 class="h1-responsive font-bold mt-4">{{ $latihan->nm_latihan }}</h1>
                            <hr>
                            <div class="">
                              <div class="kotak">
                                <img src="{{ asset('storage/images/latihan/'.$latihan->gambar) }}" alt="">
                              </div>
                              <div class="mask">
                              </div>
                              <!-- <h3 class="price"><span class="badge red darken-2">10 $</span></h3> -->
                            </div>
                            <!--/.Featured image-->
                            <br>
                            <!--Product data-->
                            <p>{!! $latihan->sl_latihan !!}</p>
                            <button class="btn btn-default btn-lg" rel="nofollow" id="jawaban">Lihat Jawaban</button>
                            <div class="kotak hide" >
                                <hr>
                                <img src="{{ asset('storage/images/latihan/'.$latihan->srcCode)}}" alt="Source Code">
                            </div>
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
            $("#nav-latihan").addClass("active");
            $(".card-body > p").addClass("card-text");
        })
    </script>

    <script >
        $(document).ready( function(e){
            $("#jawaban").on("click", function(){
                <?php if(Auth::user() ) echo '$("div.kotak").removeClass("hide");';  else echo 'alert("Silahkan Login Terlebih Dahulu")' ;?> ;
            });
        });
    </script>

@endsection
