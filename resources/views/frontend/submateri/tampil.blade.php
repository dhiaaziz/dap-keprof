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
        .kotak{
        	display: inline-block;
        	height: auto;
        	width: 100%;
        }
        .kotak img{
        	width: 100%;

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
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">
                            	@foreach ($submateri as $submateri)
                                <!--Featured image-->
                                <div class="view overlay hm-white-light z-depth-1-half">
                                    <div class="kotak">
		                                <img src="{{ asset('storage/images/SubMateri/'.$submateri->gmbr_Sub) }}" alt="">
                                    </div>
                                    <div class="mask">
                                    </div>
                                    <!-- <h3 class="price"><span class="badge red darken-2">10 $</span></h3> -->
                                </div>
                                <!--/.Featured image-->

                                <br>

                                <!--Product data-->

                                <h2 class="h2-responsive mt-4">{{ $submateri->nm_Sub }}</h2>

                                <hr>
                                <p>{!! $submateri->isi_Sub !!}</p>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                    velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                    delectus ipsam eveniet debitis nemo.</p> -->
                                 @endforeach
                            </div>
                            <!--Product-->

                        </div>
                    </div>


               </div>
                <!--/.Main column-->

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
