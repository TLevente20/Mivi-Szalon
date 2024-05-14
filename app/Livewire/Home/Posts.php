<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::latest()->take(20)->get();
        
        return view('livewire.home.posts')->with(['posts' => $posts]);
    }
}
