<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendace extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee', 'date', 'entry', 'exit',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
