<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
#[Title('Counter')]
class BasicTable extends Component
{
    public function delete(Post $post){
        $post->delete();
    }
    public function render()
    {
        return view('livewire.basic-table',[
            'posts'=>Post::all()
        ]);
    }
}
