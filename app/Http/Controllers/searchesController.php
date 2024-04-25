<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billet; // Assurez-vous d'importer le modèle Billet

class searchesController extends Controller
{
    public function rechercher(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'lieu_depart' => 'required',
            'lieu_arrivee' => 'required',
            'date_depart' => 'required|date',
        ]);

        // Récupérer les données de la requête
        $lieuDepart = $request->input('lieu_depart');
        $lieuArrivee = $request->input('lieu_arrivee');
        $dateDepart = $request->input('date_depart');
        $heureDepart = $request->input('heure_depart'); // Peut être null si non spécifié

        // Créer une requête de base pour les billets
        $query = Billet::where('lieu_depart', $lieuDepart)
                        ->where('lieu_arrivee', $lieuArrivee)
                        ->whereDate('date_depart', $dateDepart);

        // Ajouter une condition sur l'heure de départ si elle est spécifiée
        if ($heureDepart !== null) {
            $query->where('heure_depart', $heureDepart);
        }

        // Exécuter la recherche dans la base de données
        $billets = $query->get();

        // Retourner une vue avec les résultats de la recherche
        return view('listes', ['billets' => $billets]);
    }

    // Autres méthodes du contrôleur
}
