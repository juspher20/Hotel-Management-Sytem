<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
        'address',
        'chairman_id',
    ];
    public function chairman()
    {
        return $this->belongsTo(Chairman::class,'chairman_id');
    }

    public function room(){
        return $this->belongsToMany(Room::class);
    }

}
