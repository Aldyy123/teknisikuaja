<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardQuestion extends Component
{

    public $count;
    public $username;
    public $title;
    public $profile;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count, $title, $username, $profile, $id)
    {
        $this->count = $count;
        $this->title = $title;
        $this->username = $username;
        $this->profile = $profile;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-question');
    }
}
