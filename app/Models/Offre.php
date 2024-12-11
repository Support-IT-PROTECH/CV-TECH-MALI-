<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Offre extends Model
{
    protected $fillable = [
        "offre_role",
        "offre_desc",
        "offre_name",
        "offre_date",
    ];

    public function offreDetails(): HasMany
    {
        return $this->hasMany(OffreDetail::class);
    }

    public function experiencesDetails(): HasMany
    {
        return $this->hasMany(ExperienceDetail::class);
    }

    public function competenceTechniques(): HasMany
    {
        return $this->hasMany(CompetenceTechnique::class);
    }

    public function competencePersonnelles(): HasMany
    {
        return $this->hasMany(CompetencePersonnelle::class);
    }
}