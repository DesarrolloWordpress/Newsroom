<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Relaión muchos a muchos
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
