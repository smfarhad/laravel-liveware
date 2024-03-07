<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $title='';
    public $content='';
 
    public function save(){
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Post::create([
            'title'=>$this->title,
            'content'=>$this->content
        ]);
        $this->redirect('/basic-table');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
