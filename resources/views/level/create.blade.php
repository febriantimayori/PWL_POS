@extends('adminlte::page')

@section('title', 'Create Level')
@section('content_header')
    <h1>Create Level</h1>
@stop

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Level</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="../level">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="level_kode">Level Kode</label>
                                    <input type="text" class="form-control @error('level_kode') is-invalid @enderror" 
                                    id="level_kode" placeholder="Enter level_kode" name="level_kode" value="{{ old('level_kode') }}"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="level_nama">Level Nama</label>
                                    <input type="text" class="form-control @error('level_nama') is-invalid @enderror" 
                                    id="level_nama" placeholder="Enter level_nama" name="level_nama" value="{{ old('level_nama') }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
