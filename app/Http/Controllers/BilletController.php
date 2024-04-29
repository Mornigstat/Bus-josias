<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use App\Models\Compagnie;
use Illuminate\Http\Request;

class BilletController extends Controller
{
    // Méthode pour afficher tous les billets
    public function index()
    {
        $billets = Billet::all();
        return view('liste_billet_admin', compact('billets'));
    }

    // Méthode pour afficher les détails d'un billet spécifique
    public function show($id)
    {
        $billet = Billet::find($id);
        if (!$billet) {
            abort(404);
        }
        return view('billets.show', compact('billet'));
    }

    // Méthode pour afficher le formulaire de création d'un nouveau billet
    public function create()
{
    $compagnies = Compagnie::all();
    return view('create_billet', compact('compagnies'));
}


    // Méthode pour stocker un nouveau billet dans la base de données
    public function store(Request $request)
    {
        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'numero_ligne' => 'nullable|string|max:255',
            'point_depart' => 'required|string|max:255',
            'point_arrivee' => 'required|string|max:255',
            'date_heure_depart' => 'required|date',
            'numero_billet' => 'required|string|unique:billets',
            'tarif' => 'required|numeric',
            'validite' => 'required|date',
            'compagnie_id' => 'required|integer|exists:compagnies,id',
        ]);

        // Création du nouveau billet dans la base de données
        $billet = Billet::create($validatedData);
        return redirect()->route('billets.index')->with('success', 'Billet créé avec succès!');
    }

    // Méthode pour afficher le formulaire de modification d'un billet existant
    public function edit($id)
    {
        $billet = Billet::find($id);
        if (!$billet) {
            abort(404);
        }
        return view('billets.edit', compact('billet'));
    }

    // Méthode pour mettre à jour un billet dans la base de données
    public function update(Request $request, $id)
    {
        $billet = Billet::find($id);
        if (!$billet) {
            abort(404);
        }

        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'numero_ligne' => 'nullable|string|max:255',
            'point_depart' => 'required|string|max:255',
            'point_arrivee' => 'required|string|max:255',
            'date_heure_depart' => 'required|date',
            'numero_billet' => 'required|string|unique:billets,id,' . $billet->id,
            'tarif' => 'required|numeric',
            'validite' => 'required|date',
            'compagnie_id' => 'required|integer|exists:compagnies,id',
        ]);

        // Mise à jour du billet dans la base de données
        $billet->update($validatedData);
        return redirect()->route('billets.index')->with('success', 'Billet mis à jour avec succès!');
    }

    // Méthode pour supprimer un billet de la base de données
    public function destroy($id)
    {
        $billet = Billet::find($id);
        if (!$billet) {
            abort(404);
        }

        // Suppression du billet de la base de données
        $billet->delete();
        return redirect()->route('billets.index')->with('success', 'Billet supprimé avec succès!');
    }


    
}
