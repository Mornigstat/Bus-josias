<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Billets;

class ReservationController extends Controller

{
    public function show($id)
    {
        // Récupérer les détails du billet en fonction de l'ID
        $billet = Billets::findOrFail($id);

        // Passer les détails du billet à la vue
        return view('pages.reservation', compact('billet'));
    }

}
