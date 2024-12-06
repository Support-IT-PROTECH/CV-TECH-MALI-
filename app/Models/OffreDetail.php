<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffreDetail extends Model
{
    protected $fillable = [
        "offre_adresse",
        "offre_situation",
        "offre_horaire",
        "offre_salaire"
    ];
}