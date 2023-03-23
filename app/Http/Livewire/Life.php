<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Life extends Component
{
    public $open1 = false;
    public $open2 = false;
    public $open3 = false;

    public function Open1()
    {
        $this->open1 = !$this->open1;
        $this->open2 = false;
        $this->open3 = false;
    }

    public function Open2()
    {
        $this->open1 = false;
        $this->open2 = !$this->open2;
        $this->open3 = false;
    }

    public function Open3()
    {
        $this->open1 = false;
        $this->open2 = false;
        $this->open3 = !$this->open3;
    }

    public function render()
    {
        return view('livewire.life');
    }
}
