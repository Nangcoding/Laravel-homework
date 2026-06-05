<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subject;
use App\Models\Classes;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['Frist_name', 'Last_name', 'email', 'Phone', 'Profile', 'password'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_class_subjects', 'teacher_id', 'subject_id')->withPivot('class_id')->withTimestamps();
    }

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
