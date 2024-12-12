<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'offre_name',
        'date_limite',
        'offre_description',
        'offre_role',
        'file-upload',
        'competence_technique',
        'competence_personnelle',
        'responsabilite_offre',
        'adresse_offre',
        'situation_offre',
        'experience_offre',
        'horaire_offre',
        "salaire_offre",
    ];
}