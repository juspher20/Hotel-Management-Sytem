<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Model
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $fillable = [
        'hotel_name',
        'department_name',
        'full_name',
        'age',
        'address',
        'email',
        'password',
        'contact_number',
        'role',
        'salary',
        'department_id',
        'status'
    ];

    public function departments(){
        return $this->belongsTo(Department::class);
    }
}
