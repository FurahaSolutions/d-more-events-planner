<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function create()
    {
        return view('pages.events.create');
    }

    public function index()
    {
        return view('pages.events.index');
    }

    public function show($event)
    {
        return view('pages.events.show')
            ->with('links', [
                ['name' => 'Events', 'isLink' => true, 'link' => 'events'],
                ['name' => Str::title($event), 'isLink' => false, 'link' => null],
            ]);
    }
    public function store(Request $request) {
        $event = Event::create($request->all());
        return redirect()->route('events.show', ['event' => $event->id])
            ->with('status', 'Profile updated!');
    }
}
