<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLocator extends Model
{
    use HasFactory;

    protected $table = 'partner_locator';

    protected $fillable = [
        'company',
        'status',
        'logo',
        'address',
        'website',
        'phone',
        'countries_covered',
        'states_covered'
    ];
}
