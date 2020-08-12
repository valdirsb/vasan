@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - VasanDelivery')

@section('servicos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>VasanDelivery</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{asset ('produtos')}}">Produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">VasanDelivery</li>
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
                    <img class="img-fluid" src="{{asset ('img/produtos/delivery.jpg')}}" alt="">
                </div>
                <p class="section-intro__subtitle">
                  O sistema de delivery da vasan é totalmene ágil e eficaz, com ele você vai gerenciar todos seus pedidos
                  em tempo real, e vai poder deixar o seu cliente informado sobre toda movimentação do pedido dele, além
                  de ter todo controle financeiro dos seus pedidos recebidos diariamente.
                </p>
                <br>
                <p class="section-intro__subtitle">
                  O Vasan Delivery foi criado para facilitar o dia a dia dos pequenos e médios empreendedores
                  dando aos seus clientes a comodidade de ter todo gerenciamento financeiro dos seus pedidos, ter todo
                  o controle e cadrasto de seus clientes em maõs, no sistema de delivery da vasan você também pode adicionar
                  categorias e produtos a hora que desejar, também vai acompanhar todos os pedidos que chegam em tempo real
                  disponibilizando para seus clientes o status do andamento do seu pedido.
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
