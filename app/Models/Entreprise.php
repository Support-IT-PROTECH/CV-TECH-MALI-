<?php

namespace App\Models;

use App\Models\Travail;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = [
        'company_name',
        'company_logo',
        'company_description',
    ];
    public function travails()
    {
        return $this->hasMany(Travail::class);
    }
}
