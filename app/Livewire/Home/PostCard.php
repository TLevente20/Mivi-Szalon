<?php

namespace App\Livewire\Home;

use Livewire\Component;

class PostCard extends Component
{

    public $post;
 
    public function mount($post = null)
    {
        $this->post = $post;
    }
    public function render()
    {

        return view('livewire.home.post-card')->with(['post' => $this->post]);
    }
}
