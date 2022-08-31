<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    public function updatingSearh()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate();

        return view('livewire.admin.posts-index', compact('posts'));
    }
}
