@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">Créer un nouveau billet</h1>

                <form method="POST" action="{{ route('billets.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="numero_ligne" class="form-label">Numéro de ligne (facultatif)</label>
                        <input type="text" class="form-control" id="numero_ligne" name="numero_ligne">
                    </div>

                    <div class="mb-3">
                        <label for="point_depart" class="form-label">Point de départ</label>
                        <input type="text" class="form-control" id="point_depart" name="point_depart" required>
                    </div>

                    <div class="mb-3">
                        <label for="point_arrivee" class="form-label">Point d'arrivée</label>
                        <input type="text" class="form-control" id="point_arrivee" name="point_arrivee" required>
                    </div>

                    <div class="mb-3">
                        <label for="date_heure_depart" class="form-label">Date et heure de départ</label>
                        <input type="datetime-local" class="form-control" id="date_heure_depart" name="date_heure_depart" required>
                    </div>

                    <div class="mb-3">
                        <label for="numero_billet" class="form-label">Numéro de billet</label>
                        <input type="text" class="form-control" id="numero_billet" name="numero_billet" required unique>
                    </div>

                    <div class="mb-3">
                        <label for="tarif" class="form-label">Tarif</label>
                        <input type="number" step="0.01" class="form-control" id="tarif" name="tarif" required>
                    </div>

                    <div class="mb-3">
                        <label for="validite" class="form-label">Validité</label>
                        <input type="date" class="form-control" id="validite" name="validite" required>
                    </div>

                    <div class="mb-3">
                        <label for="compagnie_id" class="form-label">Compagnie</label>
                        <select class="form-select" id="compagnie_id" name="compagnie_id" required>
                            @foreach ($compagnies as $compagnie)
                                <option value="{{ $compagnie->id }}">{{ $compagnie->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
