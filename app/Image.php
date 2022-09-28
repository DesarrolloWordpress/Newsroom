<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['name', 'extension', 'url', 'size'];

    /**
     * 
     * Relación polimorfica
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
