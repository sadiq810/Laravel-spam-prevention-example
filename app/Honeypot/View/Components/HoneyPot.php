<?php

namespace App\Honeypot\View\Components;

use Illuminate\View\Component;

class HoneyPot extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
            <div style="display: none;">
                <input type="text" name="{{ config('honeypot.name_field') }}">
                <input type="text" name="{{ config('honeypot.min_time') }}" value="{{ microtime(true) }}">
            </div>
        blade;
    }
}
