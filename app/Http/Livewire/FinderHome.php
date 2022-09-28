<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class FinderHome extends Component
{

    use WithPagination;

    // protected $paginationTheme = "tailwind";
    public $search;

    public function updatingSearh()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate();

        return view('livewire.finder-home', compact('posts'));
    }
}
