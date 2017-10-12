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
                            {{--  <th><center>Nama Materi</center></th>  --}}
                            <th><center>Nama SubMateri</center></th>
                            <th><center>Isi SubMateri</center></th>
                            <th><center>Gambar Source Code</center></th>
                            <th><center>Nama Materi</center></th>
                            <th><center>Kelola</center></th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($data as $submateri)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $submateri->nm_Sub}}</td>
                            <td>{{ $submateri->isi_Sub }}</td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/SubMateri/'.$submateri->gmbr_Sub)}}" width="200px" height="140px" />
                                </center>
                            </td>
                            <td>{{ $submateri->nm_Materi }}</td>
                            <td>
                            <center>
                                <a class="btn btn-xs default" href="{{url('/editSubMateri/'.$submateri->id)}}">Edit Sub Materi</a>
                                <a class="btn btn-xs red" href="{{url('/addShowSub/delete/'.$submateri->id)}}" 
                                    onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus Sub Materi</a>
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
