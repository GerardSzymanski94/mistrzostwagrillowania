<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['name', 'products',
        'surname',
        'street',
        'postal',
        'city',
        'phone',
        'email',
        'account',
        'data',
        'value',
        'paragon',
        'paragonimg',
        'status',
        'new',
        'ownvalue',
        'reject'
    ];
}
