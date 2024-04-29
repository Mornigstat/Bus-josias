<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
     protected $fillable = [
        'numero_ligne',
        'point_depart',
        'point_arrivee',
        'date_heure_depart',
        'numero_billet',
        'tarif',
        'validite',
        'compagnie_id',
    ];

    // Vous pouvez définir des relations, des accesseurs ou des mutateurs ici
}



