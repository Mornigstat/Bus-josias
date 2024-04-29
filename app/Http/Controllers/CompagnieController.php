<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    // Méthode pour afficher toutes les compagnies
    public function index()
    {
        $compagnies = Compagnie::all();
        return view('compagnies.index', compact('compagnies'));
    }

    // Méthode pour afficher les détails d'une compagnie spécifique
    public function show($id)
    {
        $compagnie = Compagnie::find($id);
        if (!$compagnie) {
            abort(404);
        }
        return view('compagnies.show', compact('compagnie'));
    }

    // Méthode pour afficher le formulaire de création d'une nouvelle compagnie
    public function create()
    {
        return view('compagnies.create');
    }

    // Méthode pour stocker une nouvelle compagnie dans la base de données
    public function store(Request $request)
    {
        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'numero_telephone' => 'required|string|max:255',
            'logo' => 'nullable|file|image|max:2048',
        ]);

        // Stockage du logo de la compagnie si fourni
        if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logos');
        }

        // Création de la nouvelle compagnie dans la base de données
        $compagnie = Compagnie::create($validatedData);
        return redirect()->route('compagnies.index')->with('success', 'Compagnie créée avec succès!');
    }

    // Méthode pour afficher le formulaire de modification d'une compagnie existante
    public function edit($id)
    {
        $compagnie = Compagnie::find($id);
        if (!$compagnie) {
            abort(404);
        }
        return view('compagnies.edit', compact('compagnie'));
    }

    // Méthode pour mettre à jour une compagnie dans la base de données
    public function update(Request $request, $id)
    {
        $compagnie = Compagnie::find($id);
        if (!$compagnie) {
            abort(404);
        }

        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'numero_telephone' => 'required|string|max:255',
            'logo' => 'nullable|file|image|max:2048',
        ]);

        // Mise à jour du logo de la compagnie si fourni
        if ($request->hasFile('logo')) {
            if ($compagnie->logo) {
                \Storage::delete($compagnie->logo);
            }
            $validatedData['logo'] = $request->file('logo')->store('logos');
        }

        // Mise à jour de la compagnie dans la base de données
        $compagnie->update($validatedData);
        return redirect()->route('compagnies.index')->with('success', 'Compagnie mise à jour avec succès!');
    }

    // Méthode pour supprimer une compagnie de la base de données
    public function destroy($id)
    {
        $compagnie = Compagnie::find($id);
        if (!$compagnie) {
            abort(404);
        }

        // Suppression du logo de la compagnie s'il existe
        if ($compagnie->logo) {
            \Storage::delete($compagnie->logo);
        }

        // Suppression de la compagnie de la base de données
        $compagnie->delete();
        return redirect()->route('compagnies.index')->with('success', 'Compagnie supprimée avec succès!');
    }
}
