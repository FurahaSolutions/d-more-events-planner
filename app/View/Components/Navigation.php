<?php

namespace App\View\Components;

use App\Models\EventType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $page;
    /**
     * @var EventType[]|Collection
     */
    public $eventTypes;

    /**
     * Create a new component instance.
     *
     * @param $page
     */
    public function __construct($page)
    {
        $this->eventTypes = EventType::all();
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('layouts.navigation');
    }
}
