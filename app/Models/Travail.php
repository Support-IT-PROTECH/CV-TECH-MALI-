<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travail extends Model
{
    protected $fillable = [
        'company_name',
        'company_logo',
        'offre_name'
    ];
}
