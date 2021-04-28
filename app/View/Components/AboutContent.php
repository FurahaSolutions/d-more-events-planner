<?php

namespace App\View\Components;

use App\Models\PageContent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutContent extends Component
{
    public $contents;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->contents = PageContent::aboutUs();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.content.about');
    }
}
