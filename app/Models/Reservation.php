<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Specify the table if it's not the pluralized form of the model name
    protected $table = 'reservations';

    // Define which attributes are assignable
    protected $fillable = ['customer_name', 'email', 'phone', 'checkin', 'checkout', 'room_id'];

    // Define the relationship to the room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
