<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $links;

    /**
     * Create a new component instance.
     *
     * @param $links
     */
    public function __construct($links = null)
    {
        $appLinks = [
            'about' => [['name' => 'About Us', 'isLink' => false, 'link' => null]],
            'dashboard' => [['name' => 'My Dashboard', 'isLink' => false, 'link' => null]],
            'contact' => [['name' => 'Contact Us', 'isLink' => false, 'link' => null]],
            'events.create' => [
                ['name' => 'Events', 'isLink' => true, 'link' => 'events'],
                ['name' => 'New Event', 'isLink' => false, 'link' => null]
            ],
            'events.index' => [['name' => 'Events', 'isLink' => false, 'link' => null]],
            'register' => [['name' => 'Register', 'isLink' => false, 'link' => null]],
            'login' => [['name' => 'Login', 'isLink' => false, 'link' => null]],
            'password.request' => [['name' => 'Request Password Reset', 'isLink' => false, 'link' => null]],
            'password.reset' => [['name' => 'Reset Password', 'isLink' => false, 'link' => null]],
            'event.types.types.index' => [['name' => 'Events', 'isLink' => false, 'link' => null]]
        ];
        if($links == null) {
            $links = $appLinks[request()->route()->getName()];
        }

        $this->links = $links;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
