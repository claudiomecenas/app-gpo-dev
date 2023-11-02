<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cnpj',
        'address',
        'zipCode',
        'city',
        'state',
        'country',
        'phone',
        'email',
        'url',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'youtube',
    ];
}
