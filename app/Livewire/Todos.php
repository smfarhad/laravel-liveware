<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Todos')]
class Todos extends Component
{
    public $todo="Washt Has";
    public $todos =[
        'Take out Trash',
        'Do dishes',
    ];

    public function add(){
        //$this->todos = array_push($this->todos,$this->todo);
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function updated($property,$value){
        // validation will works here
        $this->$property = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
