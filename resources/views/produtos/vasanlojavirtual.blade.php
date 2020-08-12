@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - VasanLojaVirtual')

@section('servicos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>VasanLojaVirtual</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{asset ('produtos')}}">Produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">VasanLojaVirtual</li>
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
            <div class="section-intro text-justify">
                <div class="about__img">
                    <img class="img-fluid" src="{{asset ('img/home/loja.jpg')}}" alt="">
                </div>
                <p class="section-intro__subtitle">
                  Na plataforma de loja virtual da vasan você controla todo seu estoque, todas as suas vendas, organiza suas
                  entregas, lança promoçõs gerando cupons de desconto e muito mais.
                </p>
                <br>
                <p class="section-intro__subtitle">
                  A vasan loja virtual foi criada pensando em você varejista e atacadisda, é uma ferramenta completa onde você
                  vai poder controlar seu estoque, organizar suas entregas e finanças , armazenar dados pessoais de seus clientes, você poder lançar
                  promoções, gerar cupons de desconto, e muito mais. além de integrar o site de sua loja as suas redes sociais podendo
                  assim fazer uma unica postagens e todos os seus seguidores ficarem sabendo das novidades de sua loja.
                </p>
            </div>
        </div>
    </div>
</section>
<!--================ about section end =================-->

<!--================ Pricing section start =================-->      
<section >
  <div class="container">
    <div class="section-intro text-center">
      <h2 class="section-intro__title">Conheça nosso planos</h2>
      <p class="section-intro__subtitle">
        A vasan disponibiliza de três modalidades de planos, conheça nossos planos e veja qual deles
        encaixa melhor na sua empresa.
      </p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-center card-pricing">
          <div class="card-pricing__header">
            <h4>Plano Normal</h4>
            <h1 class="card-pricing__price"><span>R$</span>49,90</h1>
          </div>
          <ul class="card-pricing__list">
            <li><i class="ti-check"></i>01 email personalizado</li>
            <li><i class="ti-check"></i>Dominio .br incluso</li>
            <li><i class="ti-check"></i>Hospedagem inclusa</li>
            <li><i class="ti-check"></i>Suporte 24h</li>
            <li><i class="ti-check"></i>01 usuário cadastrado</li>
            <li><i class="ti-check"></i>Sem taxas adicionais</li>
            <li><i class="ti-check"></i>Até 50 produtos ativos</li>
          </ul>
          <div class="card-pricing__footer">
            <button class="button button-light">Contrate Agora</button>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-center card-pricing">
          <div class="card-pricing__header">
            <h4>Plano Advanced</h4>
            <h1 class="card-pricing__price"><span>R$</span>69,90</h1>
          </div>
          <ul class="card-pricing__list">
            <li><i class="ti-check"></i>01 email personalizado</li>
            <li><i class="ti-check"></i>Dominio .br incluso</li>
            <li><i class="ti-check"></i>Hospedagem inclusa</li>
            <li><i class="ti-check"></i>Suporte 24h</li>
            <li><i class="ti-check"></i>02 usuários cadastrados</li>
            <li><i class="ti-check"></i>Sem taxas adicionais</li>
            <li><i class="ti-check"></i>Até 100 produtos ativos</li>
          </ul>
          <div class="card-pricing__footer">
            <button class="button button-light">Contrate Agora</button>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-center card-pricing">
          <div class="card-pricing__header">
            <h4>Plano Ultimate</h4>
            <h1 class="card-pricing__price"><span>R$</span>99,90</h1>
          </div>
          <ul class="card-pricing__list">
            <li><i class="ti-check"></i>03 e-mails personalizados</li>
            <li><i class="ti-check"></i>Dominio .br incluso</li>
            <li><i class="ti-check"></i>Hospedagem inclusa</li>
            <li><i class="ti-check"></i>Suporte 24h</li>
            <li><i class="ti-check"></i>03 usuários cadastrados</li>
            <li><i class="ti-check"></i>Sem taxas adicionais</li>
            <li><i class="ti-check"></i>Produtos ilimitados</li>
          </ul>
          <div class="card-pricing__footer">
            <button class="button button-light">Contrate Agora</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ Pricing section end =================-->





    

@endsection
