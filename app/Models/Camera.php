<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    //

    protected $fillable = [
    	'name','ip_address',
    ];



    protected $hidden = [
    	'ip_address',
    ];

}
