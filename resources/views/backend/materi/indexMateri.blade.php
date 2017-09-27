@extends('backend.layouts.master')

@section('title')
   Materi
@endsection

@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="addShow" class="btn main-color-bg " role="button" aria-pressed="true"><i class="material-icons">add</i>Add Materi</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Nama Materi</center></th>
                            <th><center>Isi Materi</center></th>
                            <th><center>Gambar Source Code</center></th>
                            <th><center>Kelola</center></th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($Materi as $materi)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $materi->nm_Materi}}</td>
                            <td>{{ $materi->isi_Materi }}</td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/materi/'. $materi->gambar)}}" width="200px" height="140px" />
                                </center>
                            </td>
                            <td>
                            <center>
                                <a class="btn btn-xs default" href="">Edit Berita</a>
                                <a class="btn btn-xs red" href="" 
                                    onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus Berita</a>
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
