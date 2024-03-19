@extends('adminlte::page')
@section('title', 'Add Level')
@section('content_header')
    <h1>Add Level</h1>
@stop
@section('content')
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Data Level</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('/level/tambah_simpan') }}">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="level_kode">Level Kode</label>
                                <input type="text" class="form-control" id="level_kode" placeholder="Enter level_kode" name="level_kode">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="level_nama">Level Nama</label>
                                <input type="text" class="form-control" id="level_nama" placeholder="Enter level_nama" name="level_nama">
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
