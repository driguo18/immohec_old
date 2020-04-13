<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany('App\Property');
    }
}
