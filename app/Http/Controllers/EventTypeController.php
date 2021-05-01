<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Support\Str;

class EventTypeController extends Controller
{
    public function index()
    {
        return view('pages.events-types.index');
    }

    public function show(EventType $eventType)
    {
        return view('pages.events-types.show')
            ->with([
                'eventType' => $eventType,
                'links' => [
                    ['name' => 'Events', 'isLink' => true, 'link' => 'events/types'],
                    ['name' => Str::title($eventType->name), 'isLink' => false, 'link' => null],
                ]
            ]);
    }
}
