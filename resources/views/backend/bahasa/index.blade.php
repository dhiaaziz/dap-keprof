@extends('backend.layouts.master')

@section('title')
   Bahasa
@endsection

@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="{{ url('/addBahasa') }}" class="btn main-color-bg " role="button" aria-pressed="true"><i class="material-icons">add</i>Add Bahasa</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Bahasa</center></th>
                            <th><center>Gambar</center></th>
                            <!-- <th><center>Gambar Source Code</center></th>
                            <th><center>Bahasa Pemrograman</center></th> -->
                            <th><center>Kelola</center></th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($data as $bahasa)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $bahasa->bahasa}}</td>
                            <td>
                                <center>
                                </center>
                            </td>
                           <td>
                            <center>
                                <a class="btn btn-xs default" href="#">Edit Materi</a>
                                <a class="btn btn-xs red" href="#"
                                    onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus Materi</a>
                            </center>
                            </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
