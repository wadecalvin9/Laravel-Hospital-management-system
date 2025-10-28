<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'phone',
        'address',
        'specialization',
        'gender',

    ];

    public function Appointment(){
        return $this->hasMany(Appointment::class, 'user_id');
    }
}
