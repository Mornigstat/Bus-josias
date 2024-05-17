@extends('layouts.main')

@section('title', 'Module 2')

@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="assets/images/background/2.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Listes billets disponibles</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <div class="container">
            <div class="col-lg-9 mx-auto"> <!-- Utilisation de mx-auto pour centrer le contenu -->
                <!-- Affichage des résultats de la recherche -->
                @foreach ($billets as $billet)
                    <!-- Modifier la variable $billets en $billet pour éviter la confusion -->
                    <div class="col-lg-12 mb-4"> <!-- Ajout de la classe mb-4 pour un espacement en bas -->
                        <div class="de-item-list mb30 p-3 border rounded"> <!-- Ajout de classes pour la mise en forme -->
                            <div class="d-info">
                                <div class="d-text">
                                    <div class="d-atr-group">
                                        <ul class="d-atr list-unstyled">
                                            <!-- Utilisation de list-unstyled pour supprimer les puces -->

                                            <li><strong>Gare de départ:</strong> {{ $billet->ville_depart }}</li>

                                            <li><strong>Gare d'arrivée:</strong> {{ $billet->ville_arrivee }}</li>

                                            <li><strong>Date de départ:</strong> {{ $billet->date_depart }}</li>

                                            <li><strong>Heure de départ:</strong> {{ $billet->heure_depart }}</li>

                                            <li><strong>Nom de la compagnie:</strong>
                                                @php
                                                    $compagnies = App\Models\Compagnies::find($billet->compagnies_id);
                                                @endphp

                                                @if ($compagnies)
                                                    {{ $compagnies->nom }}
                                                @else
                                                    Compagnie non trouvée
                                                @endif
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="d-price mt-3"> <!-- Ajout de la classe mt-3 pour un espacement en haut -->
                                Prix <span>{{ $billet->prix }}F cfa</span>
                                <a href="{{ route('reservation.show', ['id' => $billet->id]) }}"

                                    class="btn-main">Reserver</a><!-- Ajout de la classe ml-2 pour un espacement à gauche -->

                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Fin de l'affichage des résultats de la recherche -->

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-2">
                    {{ $billets->links() }}
                </div>
                <!-- Fin de la pagination -->
            </div>
        </div>
    </div>
    <!-- content close -->
@endsection
