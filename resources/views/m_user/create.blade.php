@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'M_User')
@section('content_header_title', 'Create')
@section('content_header_subtitle', 'M_User')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Data M_User</h3>
        </div>
    
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops</strong> Input gagal<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <form action="{{ route('m_user.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User_id:</strong>
                            <input type="text" name="userid" class="form-control" placeholder="Masukkan user id">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Level_id:</strong>
                            <input type="text" name="levelid" class="form-control" placeholder="Masukkan level">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Username:</strong>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Nomor username">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-secondary" href="{{ route('m_user.index') }}"> Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection