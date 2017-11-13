@extends('backend.layouts.master')

@section('title')
   Add Latihan
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/addLatihan') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama latihan</label>
                <input type="text" class="form-control" id="nm_latihan" name="nm_latihan" placeholder="Nama latihan" required/>
            </div>
            <div class="form-group">
            <label>Bahasa</label>
                <select name="id_bahasa" class="form-control" required>
                    <option disabled>Pilih Bahasa</option>
                    @foreach ($bahasa as $bahasa)
                    <option value="{{$bahasa->id_bahasa}}">{{$bahasa->bahasa}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label> Soal Latihan</label>
                <textarea name="sl_latihan" class="form-control" id="sl_latihan" rows="3" required></textarea>
            </div>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
            </div>
            <div class="form-group">
                <label>Gambar Source Code</label>
                <input type="file" name="srcCode" class="form-control-file" id="exampleFormControlFile1" required>
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
        CKEDITOR.replace( 'sl_latihan' );
    </script>
@endsection
