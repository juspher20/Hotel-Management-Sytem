<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_name',
        'department_name',
    ];

    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
