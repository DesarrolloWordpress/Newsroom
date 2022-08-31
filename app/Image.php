<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['url'];

    /**
     * 
     * Relación polimorfica
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
