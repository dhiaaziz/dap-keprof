@extends('frontend.layouts.master')

@section('title')
Verifikasi
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
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12">
                    <h1 class="h1-responsive">Verifikasi Akun</h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>
               <div class="card" style="width: 22rem; margin : auto;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Please check your email for verification account</p>
                        </div>
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
        })
    </script>
@endsection
