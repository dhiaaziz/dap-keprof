@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">Selamat anda sudah menjadi Member</div>

                <div class="panel-body" style="text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Silahkan Menikmati Akses Penuh!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
