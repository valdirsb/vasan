@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - Quem Somos')

@section('servicos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>produtos</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">produtos</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

  
  <!--================ about section start =================-->
  <section class="section-padding--small bg-magnolia">
    <div class="container">
        <div class="container">
            <div class="section-intro text-center">
                <h2 class="section-intro__title">Produtos</h2>
                <p class="section-intro__subtitle">
                    Os produtos da vasan são de total confiabilidade, e eles irão agregar muita agilidade 
                    e praticidade no dia a dia do seu negógio.
                </p>
            </div>
        </div>
    </div>
</section>
<!--================ about section end =================-->


<!--================ about section start =================-->
<section id="vasandelivery" class="section-padding--small bg-magnolia">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-7 mb-5 mb-md-0">
                <div class="about__content">
                    <h2>VasanDelivery</h2>
                    <p>
                        O sistema de delivery da vasan é totalmene ágil e eficaz, com ele você vai gerenciar todos seus pedidos
                        em tempo real, e vai poder deixar o seu cliente informado sobre toda movimentação do pedido dele, além
                        de ter todo controle financeiro dos seus pedidos recebidos diariamente.
                    </p>
                    <a class="button button-light" href="{{asset ('produtos/vasandelivery')}}">Saiba Mais</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about__img">
                    <img class="img-fluid" src="{{asset ('img/home/cel.png')}}" alt="">
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
                        Na plataforma de loja virtual da vasan você controla todo seu estoque, todas as suas vendas, organiza suas
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
                        A plataforma vasan para advogados é uma plataforma que veio para dar total comodidade a você advogado, e
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


    

@endsection
