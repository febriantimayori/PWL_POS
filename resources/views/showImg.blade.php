@extends('layoutss.template')

@section("content")
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <div class="row g-0">
            <div class="col-md-4 mb-3">
                <img src="{{ $path }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Nama Asli Gambar</td>
                                <td>:</td>
                                <td>{{ $oldName }}</td>
                            </tr>
                            <tr>
                                <td>Nama Baru Gambar</td>
                                <td>:</td>
                                <td>{{ $newName }}</td>
                            </tr>
                            <tr>
                                <td>Lokasi Gambar</td>
                                <td>:</td>
                                <td><a href="{{ $path }}">{{ $path }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-3">
                        {{-- <a href="{{url('/imgUpload')}}" class="btn btn-secondary mr-2">Kembali</a> --}}
                        <a href="{{$path}}" download="{{$newName}}" class="btn btn-primary me-2">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection