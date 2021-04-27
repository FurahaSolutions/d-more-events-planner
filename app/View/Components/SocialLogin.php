<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialLogin extends Component
{
    public $socialLoginProviders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->socialLoginProviders = [
            ['name' => 'google'],
            ['name' => 'twitter'],
            ['name' => 'bitbucket'],
            ['name' => 'facebook'],
            ['name' => 'github'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.social-login');
    }
}
