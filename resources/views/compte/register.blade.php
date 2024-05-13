@extends('layouts.main')

@section('title', 'Inscription')

@section('content')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="assets/images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Inscription</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->


            <section aria-label="section">
                <div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3>Vous n’avez pas de compte ? Inscrivez-vous maintenant.</h3>

							<div class="spacer-10"></div>

							<form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Nom:</label>
                                            <input type='text' name='name' id='name' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Addresse email:</label>
                                            <input type='text' name='email' id='email' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Nom d'utilisateur:</label>
                                            <input type='text' name='username' id='username' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Téléphone:</label>
                                            <input type='text' name='phone' id='phone' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Mot de passe:</label>
                                            <input type='text' name='password' id='password' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Confirmer mot de passe:</label>
                                            <input type='text' name='re-password' id='re-password' class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' id='send_message' value='Inscrire' class="btn-main color-2">
                                        </div>

                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </form>

						</div>
                    </div>
				</div>
            </section>


        </div>
        <!-- content close -->
@endsection
