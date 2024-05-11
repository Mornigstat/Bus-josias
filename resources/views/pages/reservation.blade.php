@extends('layouts.main')

@section('title', 'Module 2')

@section('content')

    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">

            <img src="assets/images/background/R (2).jpeg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Reservation</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <div style="display: flex; justify-content: center;">
            <div class="col-lg-3">
                <h3>Specifications</h3>

                <div class="spacer-10"></div>

                <div class="de-spec">
                    <div class="d-row">
                        <h4>Information Compagnie</h4>
                        <span class="d-title">Nom</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Téléphone</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Email</span>
                        <spam class="d-value"></spam>
                    </div><br>
                    <div class="d-row">
                        <h4>Information voyage</h4>
                        <span class="d-title">Ville de départ</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">ville d'arrivée</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Gare de départ</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Gare d'arrivée</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Date de départ</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Heure de départ</span>
                        <spam class="d-value"></spam>
                    </div><br>

                    <h4>Information bus</h4>

                    <div class="d-row">
                        <span class="d-title">Capacité bus</span>
                        <spam class="d-value"></spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Type bus</span>
                        <spam class="d-value"></spam>
                    </div>

                </div>

                <div class="spacer-single"></div>
                <h4>Equipement</h4>
                <ul class="ul-style-2">
                    <li>WI FI</li>
                    <li>Climatiseur</li>
                    <li>Charge USB</li>
                    <li>Service client</li>
                </ul>
            </div>

            <div class="col-lg-3">
                <div class="de-price text-center">
                    Prix
                    <h3>2000f</h3>
                </div>
                <div class="spacer-30"></div>
                <div class="de-box mb25">
                    <form name="contactForm" id='contact_form' method="post">
                        <h4>Entrer Vos informations</h4>

                        <div class="spacer-20"></div>

                        <div class="row">
                            <div class="col-lg-12 mb20">

                                <h5>Nom</h5>
                                <input type="text" name="Nom" placeholder="Entrez votre nom" class="form-control">
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Prénom</h5>
                                <input type="text" name="Prenom" placeholder="Entrez votre prénom" class="form-control">
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Adresse e-mail</h5>
                                <input type="email" name="Email" placeholder="Entrez votre adresse e-mail"
                                    class="form-control">
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Numéro de téléphone</h5>
                                <div class="input-group">
                                    <select name="countryCode" class="custom-select input-group-prepend">
                                        <option value="+221">Sénégal (+221)</option>
                                        <option value="+223">Mali (+223)</option>
                                        <option value="+224">Guinée (+224)</option>
                                        <option value="+225">Côte d'Ivoire (+225)</option>
                                        <option value="+226">Burkina Faso (+226)</option>
                                        <option value="+227">Niger (+227)</option>
                                        <option value="+228">Togo (+228)</option>
                                        <option value="+229">Bénin (+229)</option>
                                        <!-- Ajoutez d'autres pays de l'Afrique de l'Ouest avec leurs codes ZIP ici -->
                                    </select>
                                    <input type="tel" name="phone" placeholder="Entrez votre numéro de téléphone"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-lg-12 mb20">
                                <h5>Adresse de facturation (optionnelle)</h5>
                                <input type="text" name="AdresseFacturation"
                                    placeholder="Entrez votre adresse de facturation" class="form-control">
                            </div>
                            <input type='submit' id='send_message' value='Reserver Maintenant' class="btn-main btn-fullwidth">

                            <div class="clearfix"></div>

                    </form>
                </div>

                <div class="de-box">
                    <h4>Partager</h4>
                    <div class="de-color-icons">
                        <span><i class="fa fa-twitter fa-lg"></i></span>
                        <span><i class="fa fa-facebook fa-lg"></i></span>
                        <span><i class="fa fa-reddit fa-lg"></i></span>
                        <span><i class="fa fa-linkedin fa-lg"></i></span>
                        <span><i class="fa fa-pinterest fa-lg"></i></span>
                        <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                        <span><i class="fa fa-delicious fa-lg"></i></span>
                        <span><i class="fa fa-envelope fa-lg"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    </div>
    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    <!-- content close -->
@endsection
