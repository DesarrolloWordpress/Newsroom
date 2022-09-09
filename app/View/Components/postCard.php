<?php

namespace App\View\Components;

use App\Post;
use Illuminate\View\Component;

class postCard extends Component
{

    public $post;

    /**
     * Create a new component instance.
     *
     * @param  \App\Post  $post
     *
     * @return void
     */
    public function __construct(String $postid = null)
    {
        $this->post = Post::find($postid);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.postcard');
    }
}
