<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'doctors';
    protected $fillable = [
        'doctor_name',
        'doctor_speciality',
        'doctor_image',
        'doctor_phone'
        
    ];
}
