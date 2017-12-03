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
              background-color: #1C2331;
          }

          footer.page-footer {
              background-color:  #1C2331;
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
                          @foreach ($forum as $forums)
                            <h6> Kategori :{{$forums->kategori}}</h6>
                            <h1 class="h1-responsive font-bold mt-4">{{$forums->judul_forum}}</h1>
                            <hr>
                                            <!--/.Featured image-->
                            <!--Product data-->
                            <p>{!! $forums->isi_forum !!}</p>
                            @endforeach
                            <br>
                            <!--Product data-->
                            <h3 class="h3-responsive font-bold mt-4">Komentar</h3>
                            <hr>
                            <br>
                        
                            @foreach ($dataKomentar as $komentar)
                            <div class="row wow fadeIn" data-wow-delay="0.2s">
                                <div class="col-md-12">
                                    <div class="jumbotron">
                                        <p>{!! $komentar->jawaban !!}</p>
                                        <hr>
                                        <h5 style= "text-align: right;"> {{$komentar->name}}</h5>
                                        <p style= "text-align: right;"></p>{{$komentar->created_at}}</p>
                                    </div>
                                </div>
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
            <form role="form" method="POST" action="{{ url('/frontend/forum/addKomentar') }}">
                    {{ csrf_field() }}
                    <div class="md-form">
                    <textarea id="textarea-char-counter" name="jawaban" class="md-textarea"></textarea>
                    </div>
                     <input type="text" id="form1" class="form-control" value="{{$forums->id}}" name="id_forum" hidden>  
                     <input type="text" id="form1" class="form-control" value="{{Auth::user()->id}}" name="id_user" hidden>  

                    <input class="btn btn-cyan" type="submit" value="Sumbit">
                </form>
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
         $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['textarea-char-counter'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Please enter a message' );
                e.preventDefault();
            }
        });
    </script>
    
@endsection