<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function getForm()
    {
        return view('upload-form');
    }

    public function upload(Request $request)
    {
        foreach ($request->file() as $file) {

            foreach ($file as $f) {
                $path = $f->store('images');

                return asset($path);
            }

        }
    }
}
