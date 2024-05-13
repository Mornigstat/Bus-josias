@extends('layouts.main')

@section('title', 'Accueil')

@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax">
            <img src="assets/images/background/1.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-light">
                        <div class="spacer-double"></div>
                        <div class="spacer-double"></div>
                        <h1 class="mb-2">Reservation <span class="id-color">billet de bus</span>? Vous êtes au bon
                            endroit.</h1>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="spacer-single sm-hide"></div>
                        <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#fff">


                            <form name="contactForm" id='contact_form' method="post">
                                <div id="step-1" class="row">
                                    <div class="col-lg-6 mb30">
                                        <h5>Entrer les informations</h5>



                                        <div class="col-lg-16">
                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <h5 class="mb-3">Gare de Départ</h5>
                                                    <input type="text" name="PickupLocation" onfocus="geolocate()"
                                                        placeholder="Entrer lieu de départ" id="autocomplete"
                                                        autocomplete="off" class="form-control">
                                                    <div class="jls-address-preview jls-address-preview--hidden">
                                                        <div class="jls-address-preview__header">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <h5 class="mb-3">Gare d'arrivée</h5>
                                                    <input type="text" name="DropoffLocation" onfocus="geolocate()"
                                                        placeholder="Entrer lieu d'arrivée" id="autocomplete2"
                                                        autocomplete="off" class="form-control">
                                                    <div class="jls-address-preview jls-address-preview--hidden">
                                                        <div class="jls-address-preview__header">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <h5 class="mb-3">Date de départ</h5>
                                                    <div class="date-time-field">
                                                        <input type="date" id="date-picker" name="Pick Up Date"
                                                            value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <h5 class="mb-3">Heure de départ</h5>
                                                    <div class="date-time-field">
                                                        <input type="time" id="departure-time" name="Departure Time"
                                                            value="" class="form-control">
                                                    </div>
                                                </div>




                                                <div class="col-lg-12">
                                                    <input type='submit' id='send_message' value='Rechercher'
                                                        class="btn-main pull-left">
                                                </div>

                                            </div>

                            </form>
                        </div>
                    </div>


        </section>

        <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#111111">
            <div class="wow fadeInRight d-flex">
                <div class="de-marquee-list">
                    <div class="d-item">
                        <span class="d-item-txt">SUV</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Hatchback</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Crossover</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Convertible</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sedan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sports Car</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Coupe</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Station Wagon</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Pickup Truck</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivans</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Exotic Cars</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                    </div>
                </div>

                <div class="de-marquee-list">
                    <div class="d-item">
                        <span class="d-item-txt">SUV</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Hatchback</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Crossover</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Convertible</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sedan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sports Car</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Coupe</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Station Wagon</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Pickup Truck</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivans</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Exotic Cars</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Notre future</h2>
                        <p></p>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3">
                        <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                            <i class="fa bg-color fa-trophy"></i>
                            <div class="d-inner">
                                <h4>First class services</h4>
                                Est dolore ut laboris eu enim eu veniam nostrud esse laborum duis consequat nostrud id
                            </div>
                        </div>
                        <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                            <i class="fa bg-color fa-road"></i>
                            <div class="d-inner">
                                <h4>24/7 road assistance</h4>
                                Est dolore ut laboris eu enim eu veniam nostrud esse laborum duis consequat nostrud id
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="assets/images/misc/bus_PNG8615.png" alt="" class="img-fluid wow fadeInUp">
                    </div>

                    <div class="col-lg-3">
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                            <i class="fa bg-color fa-tag"></i>
                            <div class="d-inner">
                                <h4>Quality at Minimum Expense</h4>
                                Est dolore ut laboris eu enim eu veniam nostrud esse laborum duis consequat nostrud id
                            </div>
                        </div>
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                            <i class="fa bg-color fa-map-pin"></i>
                            <div class="d-inner">
                                <h4>Free Pick-Up & Drop-Off</h4>
                                Est dolore ut laboris eu enim eu veniam nostrud esse laborum duis consequat nostrud id
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-light jarallax">
            <img src="assets/images/background/153948-download-wallpaper-benin-flag-4k-africa-national-symbols-flag.jpg"
                class="jarallax-img" alt="">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInRight">
                        <h2>We offer customers a wide range of <span class="id-color">commercial cars</span> and <span
                                class="id-color">luxury cars</span> for any occasion.</h2>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        Lorem ipsum non aliquip esse do eu ad amet laboris do labore reprehenderit mollit exercitation
                        cillum irure fugiat magna laboris aliquip adipisicing consectetur officia dolor minim ea enim amet
                        in ut non non excepteur anim magna dolor nostrud commodo qui irure deserunt adipisicing nisi ex
                        nostrud sunt officia in aliquip velit anim id aliqua qui do sed non ad qui sed in eu in aliqua sunt
                        pariatur occaecat in ullamco deserunt dolor consectetur laborum non duis occaecat nulla ut sed qui
                        sunt id ex sint sed eu excepteur minim nulla minim excepteur exercitation.
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                            Hours of Work
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                            Clients Supported
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                            Awards Winning
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                            Years Experience
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-cars">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Notre flotte de véhicules</h2>
                        <p>Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit
                            et ut anim.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div id="items-carousel" class="owl-carousel wow fadeIn">

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/ab74ee27f55e4fe19ff091f5b01f3600-760x570.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Bus BMW</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>74</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/wifi-icon-15.png"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg" alt="">Bus
                                                1</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>50000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/wp7641941.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>BMW M2</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>36</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/1.svg"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt=""></span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg" alt="">Bus
                                                2</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>80000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/R.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>85</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/1.svg"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg"
                                                    alt="">Exotic Car</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>30000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/Coomotor-6105-scaled.webp" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ford Raptor</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>59</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/1.svg"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg"
                                                    alt="">Pickup Truck</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>50000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/real-hino-blue-bus-11581336942l2hgxiywmj.png"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>19</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/1.svg"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg"
                                                    alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>25000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="assets/images/cars/60fead8878fe3c4ea6c5ab7c.jpeg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>VW Polo</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>79</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="assets/images/icons/1.svg"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="assets/images/icons/2.svg"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="assets/images/icons/3.svg"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="assets/images/icons/4.svg"
                                                    alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>70000fcfa</span>
                                            <a class="btn-main" href="car-single.html">Louer maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="text-light jarallax" aria-label="section">
            <img src="assets/images/background/3.jpg" alt="" class="jarallax-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h1>Que votre aventure commence</h1>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-trophy de-icon mb20"></i>
                        <h4>Services de première classe</h4>
                        <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim
                            ut ea.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-road de-icon mb20"></i>
                        <h4>Assistance routière 24h/24 et 7j/7</h4>
                        <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim
                            ut ea.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-map-pin de-icon mb20"></i>
                        <h4>Prise en charge gratuit</h4>
                        <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim
                            ut ea.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-news">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Nos compagnies</h2>
                        <p>Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit
                            et ut anim.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">

                                    <img alt="" src="assets/images/news/OIP.jpeg" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">MyBus<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">

                                    <img alt="" src="assets/images/news/R (3).jpeg" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html"><span>TRACKBUS</span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="assets/images/news/R.jpeg" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html"><span>Travel excution bus</span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonials" class="no-top no-bottom">

        </section>



        <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1">
                        <h2 class="s2">Appelez-nous pour plus d’informations. Le service client est là pour vous aider
                            toujours.</h2>
                    </div>

                    <div class="col-lg-5 text-lg-center text-sm-center">
                        <div class="phone-num-big">
                            <i class="fa fa-phone"></i>
                            <span class="pnb-text">
                                APPELEZ-NOUS MAINTENANT
                            </span>
                            <span class="pnb-num">
                                +229 54 12 25 16
                            </span>
                        </div>
                        <a href="{{ route('Contacts.index') }}" class="btn-main">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->


@endsection
