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

     
                    <div class="col-lg-9">
                        <!-- Affichage des résultats de la recherche -->
                        @if(isset($billets) && count($billets) > 0)
                            @foreach($billets as $billet)
                                <div class="col-lg-12">
                                    <div class="de-item-list mb30">
                                        <div class="d-info">
                                            <div class="d-text">
                                                <div class="d-atr-group">
                                                    <ul class="d-atr">
                                                        <h4><li><strong>Agence:</strong> {{ $billet->agence }}</li></h4>
                                                        <li><strong>Gare de départ:</strong> {{ $billet->lieu_depart }}</li>
                                                        <li><strong>Gare d'arrivée:</strong> {{ $billet->lieu_arrivee }}</li>
                                                        <li><strong>Date de départ:</strong> {{ $billet->date_depart }}</li>
                                                        <li><strong>Heure de départ:</strong> {{ $billet->heure_depart }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>${{ $billet->prix }}</span>
                                            <a class="btn-main" href="car-single.html">Reserver</a>
                                            <a class="btn-main" href="details.html" style="background-color: #ff9800;">Détails</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12">
                                <p>Aucun billet disponible pour le moment.</p>
                            </div>
                        @endif
                        <!-- Fin de l'affichage des résultats de la recherche -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
