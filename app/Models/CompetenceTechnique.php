<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class CompetenceTechnique extends Model
{

    protected $fillable = [
        "competence_name",
        "id_offre"
    ];

    public function offre(): BelongsTo
    {
        return $this->belongsTo(Offre::class);
    }
}