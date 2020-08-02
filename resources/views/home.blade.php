@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras')

@section('home-active', 'active')

@section('content')

    <!--================ Hero sm Banner start =================-->

    <section class="hero-banner mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-banner__img">
                        <img class="img-fluid" src="img/banner/hero-banner.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 pt-5">
                    <div class="hero-banner__content">
                        <h1>Soluções inovadoras para sua Empresa</h1>
                        <p>Desenvolvemos soluções digitais. Simplificamos a tecnologia para que você possa se dedicar às
                            demais áreas do seu negócio. Conheça nossos serviços e descubra como podemos lhe ajudar, da
                            ideia ao software</p>
                        <a class="button bg" href="{{asset ('quemsomos')}}">Clique aqui e Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Offer section start =================-->
    <section class="section-margin">
        <div class="container">
            <div class="section-intro pb-85px text-center">
                <h2 class="section-intro__title">Nossos Serviços</h2>
                <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus
                    torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi
                    commodo tristique nam hac luctus torquent</p>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <div class="row offer-single-wrapper">
                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-pencil-alt"></i>
                                </span>
                                <h4>Criação de Sites</h4>
                                <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-mobile"></i>
                                </span>
                                <h4>Aplicativos</h4>
                                <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row offer-single-wrapper">
                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-desktop"></i>
                                </span>
                                <h4>Sistemas</h4>
                                <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-palette"></i>
                                </span>
                                <h4>Identidade Visual</h4>
                                <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="offer-single__img">
                        <img class="img-fluid" src="img/home/offer.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Offer section end =================-->


    <!--================ about section start =================-->
    <section class="section-padding--small bg-magnolia">
        <div class="container">
            <div class="container">
                <div class="section-intro pb-85px text-center">
                    <h2 class="section-intro__title">Produtos</h2>
                    <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus
                        torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi
                        commodo tristique nam hac luctus torquent</p>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="about__content">
                        <h2>VasanDelivery</h2>
                        <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce
                            nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat
                            phasellus placerat proin aptent pulvinar fusce nostra port</p>
                        <a class="button button-light" href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__img">
                        <img class="img-fluid" src="img/home/cel.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ about section end =================-->



    <!--================ Solution section start =================-->
    <section class="section-padding--small">
        <div class="container">
            <div class="row align-items-center pt-xl-3 pb-xl-5">
                <div class="col-lg-6">
                    <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
                        <img class="img-fluid" src="img/home/adv.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution__content">
                        <h2>VasanAdvogados</h2>
                        <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce
                            nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat
                            phasellus placerat proin aptent pulvinar fusce nostra port</p>
                        <a class="button button-light" href="#">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Solution section end =================-->

    <!--================ about section start =================-->
    <section class="section-padding--small bg-magnolia">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-7 mb-5 mb-md-0">
                    <div class="about__content">
                        <h2>VasanGLPI</h2>
                        <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce
                            nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat
                            phasellus placerat proin aptent pulvinar fusce nostra port</p>
                        <a class="button button-light" href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about__img">
                        <img class="img-fluid" src="img/home/glpi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ about section end =================-->



    <!--================ Solution section start =================-->
    <section class="section-padding--small">
        <div class="container">
            <div class="row align-items-center pt-xl-3 pb-xl-5">
                <div class="col-lg-6">
                    <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
                        <img class="img-fluid" src="img/home/loja.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution__content">
                        <h2>VasanLojaVirtual</h2>
                        <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce
                            nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat
                            phasellus placerat proin aptent pulvinar fusce nostra port</p>
                        <a class="button button-light" href="#">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Solution section end =================-->

    <!--================ Start Clients Logo Area =================-->
    <section class="clients_logo_area section-padding  bg-magnolia">
        <div class="container">
            <div class="container">
                <div class="section-intro pb-85px text-center">
                    <h3 class="section-intro__title">Nossos Clientes</h3>
                </div>
            </div>
            <div class="clients_slider owl-carousel">

                <div class="item">
                    <img src="img/clients-logo/terraNutri.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/doca.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/fst.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================ End Clients Logo Area =================-->

@endsection
