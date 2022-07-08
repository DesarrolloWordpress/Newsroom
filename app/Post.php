<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
