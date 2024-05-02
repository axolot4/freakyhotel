<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Specify the table if it's not the pluralized form of the model name
    protected $table = 'rooms';

    // Define which attributes are assignable
    protected $fillable = ['room_number', 'capacity', 'rate'];

    // Define the relationship with reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
