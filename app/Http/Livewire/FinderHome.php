<?php

namespace App\Http\Livewire;

use App\Post;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class FinderHome extends Component
{

    use WithPagination;

    // protected $paginationTheme = "tailwind";
    public $search = '223';

    public function updatingSearh()
    {
        $this->resetPage();
    }

    public function render(Request $request)
    {
        //if ($request->get('search') != '') {
        //}
        $search = $request->get('search');

        $posts = Post::where('status', 2)
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('body', 'LIKE', '%' . $search . '%')
            ->latest('id')
            ->paginate();

        $search = "nop";

        return view('livewire.finder-home', compact('posts', 'search'));
    }
}
