<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $table = 'landlord';

    public function property()
    {
        return $this->hasMany('App\Property', 'id', 'property_id');
    }

}
