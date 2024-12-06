<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        "offre_role",
        "offre_desc",
        "offre_name",
        "offre_date",
    ];
}
