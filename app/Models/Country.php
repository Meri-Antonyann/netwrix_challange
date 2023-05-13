<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'loc_country';

    protected $fillable = [
        'name',
        'short_name',
    ];

    public function states ()
    {
        return $this->hasMany(State::class, 'country_id');
    }

}
