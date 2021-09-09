<?php

namespace Livewire;

use Illuminate\View\Component;

class CreateBladeView extends Component
{
    public static function fromString($contents)
    {
        return (new static)->createBladeViewFromString(app('view'), $contents);
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render() {}
}
