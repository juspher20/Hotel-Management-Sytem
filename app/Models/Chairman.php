<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chairman extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_name',
        'full_name',
        'age',
        'address',
        'email',
        'password',
        'contact_number',
        'status'
    ];
    public function hotel(){
        return $this->hasOne(Hotel::class);
    }
}
