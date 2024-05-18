<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'classe_id' ,'matricule', 'sexe', 'date_naissance'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function evaluations(){
        return $this->hasMany(Evaluation::class);
    }
}
