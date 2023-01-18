<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'price_per_room',
        'maximum_costumer_per_room'
    ];


    public function hotels()
    {
        return $this->belongsToMany(Hotel::class)
            ->withPivot('profit_per_year', 'total_costumer_per_month','number_occupied_room','number_available_room');
    }
}
