<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
        'name',
        'lastname',
        'role',

    ];
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }
}
