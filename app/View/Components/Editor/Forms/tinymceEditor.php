<?php

namespace App\View\Components\Editor\Forms;

use Illuminate\View\Component;

class tinymceEditor extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.editor.forms.tinymce-editor');
    }
}
