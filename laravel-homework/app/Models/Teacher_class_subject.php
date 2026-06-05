<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Classes;

class Teacher_class_subject extends Model
{
    use HasFactory;

    protected $table = 'teacher_class_subjects';

    protected $fillable = ['subject_id', 'class_id', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
