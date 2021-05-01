<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventStoreRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
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

    public function show(Event $event)
    {
        return view('pages.events.show')
            ->with('links', [
                ['name' => 'Events', 'isLink' => true, 'link' => 'events'],
                ['name' => Str::title($event->name), 'isLink' => false, 'link' => null],
            ]);
    }

    /**
     * @param EventStoreRequest $request
     * @return RedirectResponse
     */
    public function store(EventStoreRequest $request): RedirectResponse
    {
        $event = Event::create($request->all());
        return redirect()->route('events.show', ['event' => $event->id])
            ->with('status', 'Profile updated!');
    }


}
