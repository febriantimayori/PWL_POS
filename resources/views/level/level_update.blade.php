@extends('adminlte::page')

@section('title', 'Update Level')
@section('content_header')
    <h1>Update Level</h1>
@stop

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Level</h3>
            </div>

            <form method="post" action="{{ route('/level/update_simpan', $data->level_id) }}">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Level Kode</label>
                            <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ $data->level_kode }}">
                        </div>

                        <div class="form-group">
                            <label>Level Nama</label>
                            <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ $data->level_nama }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('/level') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection