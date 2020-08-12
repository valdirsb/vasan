@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - Serviços')

@section('servicos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Serviços</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Serviços</li>
          </ol>
        </nav>
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
                impulsionando suas vendas e otimizando o gerenciamento do seu negócio.
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
                                Além dos aplicativos de nossa plataforma você também pode criar um aplicativo
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
                                 experientes que vão te dar todo suporte.
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

    

@endsection
