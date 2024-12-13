<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable =
    [
        'nom_formation',
        'lieu_formation',
        'date_debut_fin_formation',
        'description_formation',
        'nom_competence',
        // 'niveau_competence',
        'nom_experience_professionnelle',
        'date_debut_fin_experience_professionnelle',
        'lieu_experience_professionnelle',
        'objective_professionnelle',
    ];
}
