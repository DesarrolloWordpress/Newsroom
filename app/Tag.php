<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Relaión muchos a muchos
     */
    public function tags()
    {
        return $this->belongsToMany(Post::class);
    }
}
