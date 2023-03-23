<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Confession extends Component
{
    public $password;
    public $open = false;
    public $hint = false;
    public $letter = false;

    public function openHint()
    {
        $this->hint = !$this->hint;
    }

    public function openLetter()
    {
        $this->letter = !$this->letter;
    }

    public function submit()
    {
        if($this->password == '06/08')
        {
            $this->open = true;
        }
        else{
            $this->open = false;
        }
    }

    public function render()
    {
        return view('livewire.confession');
    }
}
