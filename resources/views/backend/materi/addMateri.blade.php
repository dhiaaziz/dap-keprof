@extends('backend.layouts.master')

@section('title')
   TEST
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('addMateri') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Materi</label>
                <input type="text" class="form-control" id="nm_Materi" name="nm_Materi" placeholder="Nama Materi" required/>
            </div>
            
            <div class="form-group">
                <label> Isi Materi</label>
                <textarea name="isi_Materi" class="form-control" id="isi_Materi" rows="3"></textarea>
            </div>
             <div class="form-group">
                <label>Gambar Source Code</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
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
