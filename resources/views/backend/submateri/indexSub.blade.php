@extends('backend.layouts.master')

@section('title')
   Sub Materi
@endsection

@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="/addShowSub" class="btn main-color-bg " role="button" aria-pressed="true"><i class="material-icons">add</i>Add SubMateri</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Nama Materi</center></th>
                            <th><center>Nama SubMateri</center></th>
                            <th><center>Isi SubMateri</center></th>
                            <th><center>Gambar Source Code</center></th>
                            <th><center>Kelola</center></th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        {{--  @foreach ($Materi as $materi)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $Submateri->nm_Materi}}</td>
                            <td>{{ $Submateri->isi_Materi }}</td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/Submateri/'.$sub->gambar)}}" width="200px" height="140px" />
                                </center>
                            </td>
                            <td>
                            <center>
                                <a class="btn btn-xs default" href="{{url('/editMateri/'.$materi->id)}}">Edit Berita</a>
                                <a class="btn btn-xs red" href="{{url('/addShow/delete/'.$materi->id)}}" 
                                    onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus Berita</a>
                            </center>
                            </td>
                        
                            </tr>
                        @endforeach  --}}
                        </tbody>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
