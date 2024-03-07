<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Post;
#[Title('Counter')]
class Counter extends Component
{
    public $counter=1;

    public function increment($by){
        $this->counter=$this->counter+$by;
    }
    public function decrement(){
        $this->counter--;
    }
    public function render()
    {
        return view('livewire.counter',[
            'posts'=>Post::all()
        ]);
    }
}
