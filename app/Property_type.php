<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_type extends Model
{
    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

}
