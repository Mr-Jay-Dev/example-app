<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'country', 'address1', 'address2',
        'city', 'state', 'postcode', 'billing','id',
    ];

}
