<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=[
        'todoo',
        'do',
        'done'
    ];
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
