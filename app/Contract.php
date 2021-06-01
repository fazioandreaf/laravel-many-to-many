<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable=[
        'type',
        'expiration_date',
        'ral',
        'seniority',
    ]
}
