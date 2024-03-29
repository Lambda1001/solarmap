<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'planetId',
        'star_id',
        'planetName',
        'bodyType',
        'planetSemimajorAxis',
        'planetPerihelion',
        'planetAphelion',
        'planetMeanRadius',
        'massValue',
        'massExponent',
        'planetGravity',
        'planetDescription',
        'planetImage',
    ];
    public function star(){
       return $this->belongsTo(Star::class);
    }
}
