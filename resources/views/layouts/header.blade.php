<!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+229 12 12 12 12</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@josias.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Lundi - Dimanche 08.00 - 18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-1" src="assets/images/" alt="">
                                            <img class="logo-2" src="assets/images/" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                <li><a class="menu-item" href="{{ route('Accueil.index') }}">Accueil</a></li>

                                <li><a class="menu-item" href="{{ route('Listes.index') }}">Liste</a></li>

                                <li><a class="menu-item" href="{{ route('Listes.index') }}">Nos compagnies</a></li>

                                <li><a class="menu-item" href="{{ route('Apropos.index') }}">A propos</a></li>

                                <li><a class="menu-item" href="{{ route('Contacts.index') }}">Contacts</a></li>

                                <li><a class="menu-item" href="#">Compte</a>
                                        <ul>
                                            <li><a class="menu-item" href="404.html">Page 404</a></li>
                                            <li><a class="menu-item" href="{{ route('Monprofile.index') }}">Mon profil</a></li>
                                            <li><a class="menu-item" href="{{ route('Maliste.index') }}">Ma liste</a></li>
                                            <li><a class="menu-item" href="{{ route('Dashboard.index') }}">Dashborad</a></li>
                                        </ul>
                                    </li>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                   <a href="{{ route('Login.index') }}" class="btn-main">Se connecter</a>
                                   <a href="{{ route('Register.index') }}" class="btn-main">S'inscrire</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
