@extends('backend.layouts.master')

@section('title')
   Add Sub Materi
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/addSubMateri') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Materi</label>
                <select name="group" class="form-control" >
                    <option disabled>Pilihan Materi</option>
                        @foreach($dataMateri as $materi)
                    <option value="{{ $materi->id_materi }}" >{{ $materi->nama }}</option>
                         @endforeach
                </select>   
            </div>

            <div class="form-group">
                <label>Nama SubMateri</label>
                <input type="text" class="form-control" id="nm_Sub" name="nm_Sub" placeholder="Nama SubMateri" required/>
            </div>
            
            <div class="form-group">
                <label> Isi SubMateri</label>
                <textarea name="isi_Sub" class="form-control" id="isi_Sub" required></textarea>
            </div>
             <div class="form-group">
                <label>Gambar Source Code</label>
                <input type="file" name="gmbr_Sub" class="form-control-file" id="exampleFormControlFile1" required>
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
        CKEDITOR.replace( 'isi_Sub' );
    </script>
@endsection
