<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'postal_code',
        'place',
        'telephone',
        'emailaddress',
        'user_id'
    ];

}
