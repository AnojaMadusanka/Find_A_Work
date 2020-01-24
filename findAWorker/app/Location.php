<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "location";
    protected $fillable = ['address_address', 'address_latitude', 'address_longitude'];
}
