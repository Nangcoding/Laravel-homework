<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Term;
use App\Models\Classes;

class Add_class_to_term extends Model
{
    use HasFactory;

    protected $table = 'add_class_to_terms';

    protected $fillable = ['term_id', 'class_id'];

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
