<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload() {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request) {
        $request->validate([
            'berkas' => 'required|file|image|max:5000',]);
            $extFile = $request->berkas->getClientOriginalName();
            $namaFile = "web-" . time() . "." . $extFile;
            $path = $request->berkas->storeAs('uploads', $namaFile);
            echo "Proses upload berhasil, file berada di: " . $path;
            // echo $request->berkas->getClientOriginalName() . " lolos validasi";
    }
}
