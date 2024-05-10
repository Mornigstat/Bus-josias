<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billets extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_matricule',
        'ville_depart',
        'ville_arrivee',
        'arrets_intermediaires',
        'date_depart',
        'heure_depart',
        'prix',
        'compagnies_id',
        'type_bus',
        'capacite_bus',
        'equipements',
        'restrictions',
        'gare_depart',
        'gare_arrivee',
        'lien_google_maps_depart',
        'lien_google_maps_arrivee',
    ];

    // Relation avec la compagnie
    public function compagnies()
    {
        return $this->belongsTo(Compagnies::class, 'compagnies_id');
    }
}
