<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;
use App\Models\Classes;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'Description'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_class_subjects', 'subject_id', 'teacher_id')->withPivot('class_id')->withTimestamps();
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'teacher_class_subjects', 'subject_id', 'class_id')->withTimestamps();
    }
}
