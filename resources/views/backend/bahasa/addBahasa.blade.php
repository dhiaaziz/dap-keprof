@extends('backend.layouts.master')

@section('title')
   Add Bahasa
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/addBahasa') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Bahasa</label>
                <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Nama Materi" required/>
            </div>
             <div class="form-group">
                <label>Gambar Bahasa</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
            </div>
            <hr>
            <div >
               <input class="btn main-color-bg btn-lg" type="submit" value="Save">
            </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('more-script')
    <script src="https://cdn.ckeditor.com/4.7.1/basic/ckeditor.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace( 'isi_Materi' );
    </script>
@endsection
