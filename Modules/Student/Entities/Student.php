<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'fullname',
        'address',
        'email',
        'phone_number',
        'pincode',
        'classes',
        'student_image',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Student\Database\factories\StudentFactory::new();
    }
}
