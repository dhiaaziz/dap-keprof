@extends('backend.layouts.master')

@section('title')
   Edit Materi
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/editMateri/update') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Materi</label>
                <input type="text" class="form-control" id="nm_Materi" name="nm_Materi" value="{{$data->nm_Materi}}" required/>
            </div>
            
            <div class="form-group">
                <label> Isi Materi</label>
                <textarea name="isi_Materi" class="form-control" id="isi_Materi"  value="{{$data->isi_Materi}}" required>{{htmlspecialchars($data->isi_Materi) }}</textarea>
            </div>
             <div class="form-group">
                <label>Gambar Source Code</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required >
            </div>
             <div class="form-group">
                <label for="">Bahasa</label>
                <select name="id_bahasa" class="form-control">
                    <option disabled>Pilihan Bahasa</option>
                        @foreach($databahasa as $bahasa)
                    <option value="{{ $bahasa->id_bahasa }}">{{ $bahasa->bahasa }}</option>
                         @endforeach
                </select>   
            </div>
            <hr>
            <div >
               <input class="btn main-color-bg btn-lg" type="submit" value="Save">
            </div>
            <input type="text" value="{{ $data->id }}" class="form-control" name="id" required style="display:none"/>
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
