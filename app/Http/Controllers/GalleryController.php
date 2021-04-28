<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.gallery')->with('links', [
            ['name' => 'Gallery', 'isLink' => false, 'link' => null],
        ]);
    }
}
