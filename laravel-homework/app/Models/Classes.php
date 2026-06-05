<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
use App\Models\Subject;


class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['name', 'Description'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_classes', 'class_id', 'student_id')->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_class_subjects', 'class_id', 'subject_id')->withPivot('teacher_id')->withTimestamps();
    }
}
