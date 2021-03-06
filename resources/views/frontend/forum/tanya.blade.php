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


                            <!--Product data-->
                            <h2 class="h2-responsive mt-4">Isi Form Pertanyaan</h2>
                            <br>
                            <form role="form" method="POST" action="{{ url('/frontend/forum/addTanya') }}">
                              {{ csrf_field() }}
                              <div class="md-form">
                                <input name="judul_forum" type="text" id="form1" class="form-control">
                                <label for="form1" class="">Judul</label>
                              </div>
                              <label for="">Pertanyaan</label>
                              <div class="md-form">
                                <textarea  name="isi_forum"id="textarea-char-counter" class="md-textarea" length="120"></textarea>
                              </div>
                              <input type="text" id="form1" class="form-control" value="pertanyaan" name="kategori" hidden>
                              <input type="text" id="form1" class="form-control" value="{{Auth::user()->id}}" name="id_user" hidden>
                              <!--Yellow-->
                              <input class="btn main-color-bg btn-lg" type="submit" value="Tanya">
                                <!-- <
                              <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                  velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                  delectus ipsam eveniet debitis nemo.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                  velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                  delectus ipsam eveniet debitis nemo.</p>
                          </div>
                          <!--Product-->
                        </form>

                    </div>
                </div>
                <!--/.First row-->


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
    <script src="https://cdn.ckeditor.com/4.7.1/basic/ckeditor.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace( 'textarea-char-counter' );
    </script>
@endsection
