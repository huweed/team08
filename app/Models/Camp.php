<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;
    protected $fillable=[
        'camp' ,
        'rule' ,
        'city' ,
        'environment' ,
        'level'
    ];

    public function  characters()
    {
        return $this->hasMany('App\Modles\Chaeacter','cid');
    }

}
