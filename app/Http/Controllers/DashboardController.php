<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about')->with('links', [
            ['name' => 'About Us', 'isLink' => false, 'link' => null],
        ]);
    }
}
