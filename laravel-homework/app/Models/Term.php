<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Generation;
use App\Models\Classes;

class Term extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'generation_id'];

    public function generation()
    {
        return $this->belongsTo(Generation::class, 'generation_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'add_class_to_terms', 'term_id', 'class_id')->withTimestamps();
    }
}
