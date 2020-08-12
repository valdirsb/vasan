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
                        <p>Desenvolvemos soluções digitais. Simplificamos a tecnologia para que você possa se dedicar as
                            demais áreas do seu negócio. Conheça nossos serviços e descubra como podemos lhe ajudar, dar
                            ideia ao software.</p>
                        <a class="button bg" href="{{asset ('quemsomos')}}">Clique aqui e saiba mais</a>
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
                <p class="section-intro__subtitle">
                    Sistemas web modernos e de total confiabilidade, na Vasan você terá uma plataforma
                    segura e de total praticidade, sistemas extremamentes fáceis de se gerenciar. 
                    Impulsionando suas vendas e otimizando o gerenciamento do seu negócio.
                </p>
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
                                <p>
                                    Crie seus sites totalmente personalizados e com sua cara. Consulte um de nossos
                                    Atendentes, fale um pouco de sua ideia e pronto o resto deixe com a Vasan.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-mobile"></i>
                                </span>
                                <h4>Aplicativos</h4>
                                <p>
                                    Além dos aplicativos da nossa plataforma você também pode criar um aplicativo
                                    exclusivo para o que você precisa, basta você nos contar sua ideia que fazemos
                                    virar realidade. Consulte um de nossos Atendentes e o resto deixe com a Vasan.
                                </p>
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
                                <p>
                                    Disponibilizamos de sistemas totalmente úteis para o seu dia a dia que irão te ajudar
                                    a gerenciar melhor o seu negócio facilitando e otimizando sua produtividade.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 offer-single">
                            <div class="card offer-single__content text-center">
                                <span class="offer-single__icon">
                                    <i class="ti-palette"></i>
                                </span>
                                <h4>Identidade Visual</h4>
                                <p>
                                    Você que está começando um negócio, e está precisando de uma ajudinha para criar
                                    sua marca, deixa eu te contar um segredo! A Vasan tem uma equipe de Designers Profissionais
                                    e experientes que vão te dar todo suporte.
                                </p>
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
                    <p class="section-intro__subtitle">
                        Os produtos da Vasan são de total confiabilidade, e eles irão agregar muita agilidade 
                        e praticidade no dia a dia do seu negógio.
                    </p>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="about__content">
                        <h2>VasanDelivery</h2>
                        <p>
                            O sistema de delivery da Vasan é totalmene ágil e eficaz, com ele você vai gerenciar todos seus pedidos
                            em tempo real, vai poder deixar o seu cliente informado sobre toda movimentação do pedido dele, além
                            de ter todo controle financeiro dos seus pedidos recebidos diariamente.
                        </p>
                        <a class="button button-light" href="{{asset ('produtos/vasandelivery')}}">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__img">
                        <img class="img-fluid" src="{{asset ('img/home/delivery-Home.jpg')}}" alt="">
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
                        <img class="img-fluid" src="{{asset ('img/home/loja.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution__content">
                        <h2>VasanLojaVirtual</h2>
                        <p>
                            Na plataforma de loja virtual da Vasan você controla todo seu estoque, todas as suas vendas, organiza suas
                            entregas, lança promoçõs gerando cupons de desconto e muito mais.
                        </p>
                        <a class="button button-light" href="{{asset ('produtos/vasanlojavirtual')}}">Saiba Mais</a>
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
                        <h2>VasanAdvogados</h2>
                        <p>
                            A plataforma Vasan para Advogados, é uma plataforma que veio para dar total comodidade a você Advogado e
                            aos seus clientes disponibilizando com um simples click tudo que seu cliente precisar saber sobre o seu processo.
                        </p>
                        <a class="button button-light" href="{{asset ('produtos/vasanadvogados')}}">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about__img">
                        <img class="img-fluid" src="{{asset ('img/home/adv.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ about section end =================-->



    

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
                    <img src="img/clients-logo/helgrifs.jpg" alt="">
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
