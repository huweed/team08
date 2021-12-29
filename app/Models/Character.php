<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable=[
        'name' ,
        'title' ,
        'cid' ,
        'position' ,
        'difficulty'
    ];

    public  function camp()
    {
        return $this->belongsTo('App\Modles\Camp','cid','id');
    }
    public  function  scopedifficulty($query)
    {
        $query->where('difficulty','=',"簡單")
            ->orderBy('difficulty');
    }

}
