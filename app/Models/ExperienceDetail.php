<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ExperienceDetail extends Model
{
    protected $fillable = [
        "experience_name",
        "id_offre"
    ];

    public function offre(): BelongsTo
    {
        return $this->belongsTo(Offre::class);
    }
}
