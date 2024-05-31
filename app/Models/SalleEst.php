<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalleEst extends Model
{
    protected $table = 'salle_ests';
    use HasFactory;
    protected $fillable = [
        'TypeSalle',
        'numero',
        'idAdministrateur',
        // Ajoutez d'autres colonnes que vous souhaitez autoriser à être remplies ici
    ];
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class, 'idAdministrateur');
    }
}
