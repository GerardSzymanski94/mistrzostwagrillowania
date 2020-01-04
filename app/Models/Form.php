<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['description', 'name', 'products',
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

    public function getProducts()
    {
        return 'null';
    }
}
