<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class searches extends Model
{
    protected $table = 'billets';

    protected $fillable = [
        'lieu_depart',
        'lieu_arrivee',
        'date_depart',
        'heure_depart',
        // Ajoutez d'autres colonnes ici
    ];

    // Autres propriétés et méthodes du modèle
}
