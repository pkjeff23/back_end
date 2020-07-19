<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public function city()
    {
        return $this->hasMany('App\City', 'id', 'city_id');
    }

    public function type()
    {
        return $this->hasMany('App\Type', 'id', 'type_id');
    }

    public function landlord()
    {
        return $this->belongsToMany('App\Landlord');
    }
}
