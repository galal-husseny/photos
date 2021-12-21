<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    public function index($id = 1)
    {
        $photos = Photo::where('product_id',$id)->get();
        return view('photos',compact('photos'));
    }

    public function downloadSinglPhoto(Request $request,$id)
    {
        $photo = Photo::find($id);
        return response()->download(public_path('photos/'.$photo->photo));
    }
}
