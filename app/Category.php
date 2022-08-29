<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    /**
     * Relación uno a muchos
     */
    public function categories()
    {
        return $this->hasMany(Post::class);
    }
}
