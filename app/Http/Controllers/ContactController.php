<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact')->with('links', [
            ['name' => 'Contact ue', 'isLink' => false, 'link' => null],
        ]);
    }
}
