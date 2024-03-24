@extends('adminlte::page')

@section('title', 'Update User')
@section('content_header')
    <h1>Update User</h1>
@stop

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update User</h3>
            </div>

            <form method="post" action="{{ route('/user/update_simpan', $data->user_id) }}">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                        </div>

                        <div class="form-group">
                            <label>ID Level</label>
                            <input type="number" class="form-control" id="level_id" name="level_id" value="{{ $data->level_id }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('/user') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection