<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //protected $fillable = ['name','city','locality','surface','pieces_number','price','caution','status'];
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public function property_type()
    {
        return $this->belongsTo('App\Property_type');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function scopeStatus($query)
    {
        return $query->where('status', 0)->get();

    }

    public function getStatusAttribute($attributes)
    {
        return[
            '0' => 'Indisponible',
            '1' => 'Disponible'
        ][$attributes];
    }

}
