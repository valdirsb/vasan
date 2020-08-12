@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - Quem Somos')

@section('quemsomos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Quem Somos</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quem Somos</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

  
  <!--================ Offer section start =================-->      
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center">
        <h2 class="section-intro__title">Vasan - Soluções Inovadoras</h2>
        <p class="section-intro__subtitle">
            Desenvolvemos soluções digitais. Simplificamos a tecnologia para que você possa se dedicar às demais áreas do seu negócio. Conheça nossos serviços e descubra como podemos lhe ajudar, da ideia ao software
        </p>
      </div>

    </div>
  </section>
  <!--================ Offer section end =================-->

  <!--================ about section start =================-->
  <section id="missao" class="section-padding--small bg-magnolia">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-7 mb-5 mb-md-0">
                    <div class="about__content">
                        <h2>Missão</h2>
                        <p>
                            A vasan tem por missão atender a demanda do mercado facilitando o dia a dia do 
                            micro e do pequeno empreendededor, baranteando os custos de sistemas web.
                            visando a acessibilidade de todos nas melhores plataformas digitais ajudando a impulsionar 
                            as suas vendas, e por sua vez gerenciar da melhor forma possivél as suas finanças.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about__img">
                        <img class="img-fluid" src="img/site/missao.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ about section end =================-->

    <!--================ Solution section start =================-->
    <section id="visao" class="section-padding--small">
        <div class="container">
            <div class="row align-items-center pt-xl-3 pb-xl-5">
                <div class="col-lg-6">
                    <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
                        <img class="img-fluid" src="img/site/visao.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution__content">
                        <h2>Visão</h2>
                        <p>
                            Ser uma referência em parceria na acessibilidade e inclusão dos pequenos no mundo
                            dos grandes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Solution section end =================-->

    

@endsection
