<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relación uno a muchos inversa
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación muchos a muchos
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * 
     * Relación 1:1 polimorfica
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
