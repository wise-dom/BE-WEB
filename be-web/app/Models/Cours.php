<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Eval_;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = ['intitule', 'coefficient', 'enseignant_id'];

    public function enseignant(){
        return $this->belongsTo(Enseignant::class);
    }

    public function evaluations(){
        return $this->hasMany(Evaluation::class);
    }
}
