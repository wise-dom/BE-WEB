<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'effectif','filiere_id'];

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }


}
