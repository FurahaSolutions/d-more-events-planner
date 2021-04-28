<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class EventController extends Controller
{
    public function show($event)
    {
        return view('pages.events.show')
            ->with('links', [
                ['name' => 'Events', 'isLink' => true, 'link' => 'events'],
                ['name' => Str::title($event), 'isLink' => false, 'link' => null],
            ]);
    }
}
