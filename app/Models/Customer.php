<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
