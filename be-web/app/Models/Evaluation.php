<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'date_evaluation','etudiant_id','cours_id'];

    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }

    public function cours(){
        return $this->belongsTo(Cours::class);
    }
}
