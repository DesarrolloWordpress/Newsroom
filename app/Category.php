<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    /**
     * Relación uno a muchos
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
