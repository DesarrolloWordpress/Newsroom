<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'extension', 'url', 'size'];

    /**
     * Relacion polimorfica
     */
    public function fileable()
    {
        return $this->morphTo();
    }
}
