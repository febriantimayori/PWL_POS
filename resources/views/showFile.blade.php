<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampilan File</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Tampilan File Gambar Yang Diunggah</h2>
        <hr>
        <div class="card mt-4 border position-relative">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{$path}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title">Detail File</h4>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama Asli File</td>
                                    <td>:</td>
                                    <td>{{$oldName}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Baru File</td>
                                    <td>:</td>
                                    <td>{{$newName}}</td>
                                </tr>
                                <tr>
                                    <td>Format/Extension File</td>
                                    <td>:</td>
                                    <td>{{$extension}}</td>
                                </tr>
                                <tr>
                                    <td>Ukuran File</td>
                                    <td>:</td>
                                    <td>{{$size}}Byte</td>
                                </tr>
                                <tr>
                                    <td>Lokasi File</td>
                                    <td>:</td>
                                    <td>{{$path}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bottom-right-buttons position-absolute bottom-0 end-0 mb-3 me-3">
                            <a href="{{$path}}" download="{{$newName}}" class="btn btn-success me-2">Download</a>
                            <a href="{{url('/formUpload')}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>