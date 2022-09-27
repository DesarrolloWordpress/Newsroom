<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['url'];

    /**
     * Relacion polimorfica
     */
    public function fileable()
    {
        return $this->morphTo();
    }
}
