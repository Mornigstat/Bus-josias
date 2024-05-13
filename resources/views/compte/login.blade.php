@extends('layouts.main')

@section('title', 'Connexion')

@section('content')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="assets/images/background/2.jpg" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-4">
                                    <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                        <h4>Se connecter</h4>
                                        <div class="spacer-10"></div>
                                        <form id="form_register" class="form-border" method="post" action="email.php">
                                            <div class="field-set">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Entrer email" />
                                            </div><br>
                                            <div class="field-set">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Entrer votre mot de passe" />
                                            </div>
                                            <div id="submit">
                                                <input type="submit" id="send_message" value="Se connecter" class="btn-main btn-fullwidth rounded-3" />
                                            </div>
                                        </form>
                                        <div class="title-line">ou&nbsp;se&nbsp;connecter&nbsp;avec</div>
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                                <a class="btn-sc btn-fullwidth mb10" href="#"><img src="assets/images/svg/google_icon.svg" alt="">Google</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class="btn-sc btn-fullwidth mb10" href="#"><img src="assets/images/svg/facebook_icon.svg" alt="">Facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </div>
        <!-- content close -->
@endsection
