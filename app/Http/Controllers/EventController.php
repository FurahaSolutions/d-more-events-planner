<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($event) {
        return view('pages.events.show', ['event' => $event]);
    }
}
