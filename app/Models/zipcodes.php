<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zipcodes extends Model
{
    use HasFactory;

    protected $fillable = [
        'zipcode',
        'settlement_name',
        'settlement_type',
        'municipality_name',
        'federal_entity',
        'city_name',
        'd_cp',
        'federal_entity_key',
        'c_oficina',
        'settlement_type_key',
        'municipality_key',
        'settlement_municipality_id',
        'zone_type',
        'city_key',        
    ];
}
