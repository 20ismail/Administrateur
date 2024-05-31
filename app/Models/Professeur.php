<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professeur extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numTelephone',
        'password',
        'heuresEnseignementAnnee',
        'image',
        'id_admin',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'heuresEnseignementAnnee' => 'integer',
        'id_admin' => 'integer',
    ];
}
