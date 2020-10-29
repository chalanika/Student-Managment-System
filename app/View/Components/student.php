<?php

namespace App\View\Components;

use Illuminate\View\Component;

class student extends Component
{
    public $title;
    public $info;
    public $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$info)
    {
        //
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.student',[
            'list'=>$this->list(),
        ]);
    }

    public function list(){
        return [
            '1',
            '2',
            '3',
        ];
    }
}
