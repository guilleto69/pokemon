<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable =['name', 'descripcion', 'avatar'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
