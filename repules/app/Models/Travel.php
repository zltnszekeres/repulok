<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;


  protected $primaryKey= 'travel_id';

  protected $fillable = [
    'evaulation',
    'flight_id',
    'user_id',
];

}
