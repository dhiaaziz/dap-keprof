@extends('backend.layouts.master')

@section('title')
   User
@endsection

@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="/addShow" class="btn main-color-bg " role="button" aria-pressed="true"><i class="material-icons">add</i>Add Materi</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Nama User</center></th>
                            <th><center>Email User</center></th>
                            <th><center>Status Aktivasi</center></th>
                           
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($dataUser as $user)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                            <td><?php if($user->status == 0) echo "Non Active"; else echo "Active";?
                            
                            amaretcelmartcelius
                            `></td>
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
