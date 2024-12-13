<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise_2 extends Model
{
    protected $fillable = [
        'image',
        'nom',
        'domaine',
        'description',
        'vision',
        'nom_valeur',
        'nom_secteur_activite',
        'adresse',
        'email',
        'telephone',
        'site_web'
    ];
}
