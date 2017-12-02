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

          .widget-wrapper {
              padding-bottom: 2rem;
              border-bottom: 1px solid #e0e0e0;
              margin-bottom: 2rem;
          }

          .reviews {
              text-align: center;
              border-top: 1px solid #e0e0e0;
              border-bottom: 1px solid #e0e0e0;
              padding: 1rem;
              margin-top: 1rem;
              margin-bottom: 2rem;
          }

          .price {
              position: absolute;
              left: 0;
              top: 0;
              margin-top: -2px;
          }

          .price .tag {
              margin: 0;
          }

          .navbar {
              background-color: #676b74;
          }

          footer.page-footer {
              background-color: #676b74;
              margin-top: 2rem;
          }
          .card {
              font-weight: 300;
          }
          .navbar .btn-group .dropdown-menu a:hover {
              color: #000 !important;
          }
          .navbar .btn-group .dropdown-menu a:active {
              color: #fff !important;
          }
          .tanggal{
            color: #FBC02D!important;
          }

    </style>
@endsection

@section('header')
    @include('frontend.layouts.header2')
@endsection

@section('content')
<<main>

    <!--Main layout-->
    <div class="container">
        <div class="row">

            <!--Sidebar-->
            <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">

            </div>
            <!--/.Sidebar-->

            <!--Main column-->
            <div class="col-lg-8">

                <!--First row-->
                <div class="row wow fadeIn" data-wow-delay="0.4s">
                    <div class="col-md-12">
                        <!--Product-->
                        <div class="product-wrapper">
                            <br>

                            <!--Product data-->
                            <h2 class="h2-responsive mt-4">Product title</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                delectus ipsam eveniet debitis nemo.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                delectus ipsam eveniet debitis nemo.</p>
                        </div>
                        <!--Product-->

                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">

                    <!--Heading-->
                    <div class="col reviews wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="h2-responsive">Komentar</h2>
                    </div>

                    <!--First review-->
                    <div class="media wow fadeIn" data-wow-delay="0.2s">
                        <div class="media-body ml-4">
                            <h4 class="media-heading">John Doe</h4>
                            <p class="tanggal">Tanggal nya euy</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure
                                soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda.
                                Earum sit id ullam eum vel delectus!</p>
                        </div>
                    </div>

                    <br>

                </div>
                <!--/.Second row-->

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
            $("#nav-forum").addClass("active");
            $(".card-body > p").addClass("card-text")
        })
    </script>
    
@endsection
