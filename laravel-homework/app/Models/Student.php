<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Generation;
use App\Models\Classes;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_id', 'profile', 'last_name', 'first_name', 'gender', 'email', 'password', 'province', 'generation_id'
    ];

    public function generation()
    {
        return $this->belongsTo(Generation::class, 'generation_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'student_classes', 'student_id', 'class_id')->withTimestamps();
    }
}
