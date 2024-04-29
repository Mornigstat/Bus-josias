@extends('layouts.main')


@section('content')
    <div class="container">
        <h1 class="text-center mt-4 mb-5">Liste des billets Ajouter</h1>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">Numéro de ligne</th>
                            <th scope="col">Point de départ</th>
                            <th scope="col">Point d'arrivée</th>
                            <th scope="col">Date et heure de départ</th>
                            <th scope="col">Numéro de billet</th>
                            <th scope="col">Tarif</th>
                            <th scope="col">Validité</th>
                            <th scope="col">Compagnie</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($billets as $billet)
    <tr>
        <td>{{ $billet->numero_ligne }}</td>
        <td>{{ $billet->point_depart }}</td>
        <td>{{ $billet->point_arrivee }}</td>
        <td>{{ $billet->date_heure_depart }}</td>
        <td>{{ $billet->numero_billet }}</td>
        <td>{{ $billet->tarif }}</td>
        <td>{{ $billet->validite }}</td>
        <td>
            @if ($billet->compagnie)
                {{ $billet->compagnie->nom }}
            @else
                Aucune compagnie associée
            @endif
        </td>
        <td>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
