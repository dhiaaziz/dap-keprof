@extends('backend.layouts.master')

@section('title')
   Latihan
@endsection

@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="/addShowLatihan" class="btn main-color-bg " role="button" aria-pressed="true"><i class="material-icons">add</i>Add Latihan</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Nama latihan</center></th>
                            <th><center>Bahasa</center></th>
                            <th><center>Isi Latihan</center></th>
                            <th><center>thumbnail</center></th>
                            <th><center>Gambar Kunci Jawaban</center></th>
                            <th><center>Kelola</center></th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($Latihan as $latihan)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $latihan->nm_latihan}}</td>
                            <td>{{ $latihan->bahasa}}</td>
                            <td>{{ $latihan->sl_latihan }}</td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/latihan/'.$latihan->gambar)}}" width="200px" height="140px" />
                                </center>
                            </td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/latihan/'.$latihan->srcCode)}}" width="200px" height="140px" />
                                </center>
                            </td>
                           <td>
                            <center>
                                <a class="btn btn-xs default" href="{{url('/editLatihan/'.$latihan->id)}}">Edit Latihan</a>
                                <a class="btn btn-xs red" href="{{url('/addShowLatihan/delete/'.$latihan->id)}}" 
                                    onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus Latihan</a>
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
