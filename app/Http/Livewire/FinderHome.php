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
    private $search = '';

    public function updatingSearh()
    {
        $this->resetPage();
    }

    public function render(Request $request)
    {
        //if ($request->get('search') != '') {
        //}
        $search = $this->search = $request->get('search');

        /*$posts = Post::where('status', 2)
            ->latest('id')
            ->paginate();*/

        $posts = Post::where('status', 2)
            ->where(function ($query) {
                $query->orWhere('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('body', 'LIKE', '%' . $this->search . '%');
            })
            ->latest('id')
            ->paginate();

        return view('livewire.finder-home', compact('posts', 'search'));
    }
}
