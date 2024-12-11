<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OffreDetail extends Model
{
    protected $fillable = [
        "id_offre",
        "offre_adresse",
        "offre_situation",
        "offre_horaire",
        "offre_salaire",
    ];

    public function offre(): BelongsTo
    {
        return $this->belongsTo(Offre::class);
    }

    // public $timestamps = false;
}