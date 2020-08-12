@extends('layouts.site')

@section('title', 'Vasan Soluções inovadoras - VasanAdvogados')

@section('servicos-active', 'active')

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>VasanAdvogados</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset ('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{asset ('produtos')}}">Produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">VasanAdvogados</li>
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
                    <img class="img-fluid" src="{{asset ('img/home/adv.png')}}" alt="">
                </div>
                <p class="section-intro__subtitle">
                  A plataforma Vasan para Advogados, é uma plataforma que veio para dar total comodidade a você Advogado e
                  aos seus clientes disponibilizando com um simples click tudo que seu cliente precisar saber sobre o seu processo.
                </p>
                <br>
                <p class="section-intro__subtitle">
                  Na plataforma Vasan para Advogados você Advogado lança no sistema toda movimentação processual do seu cliente,
                  deixando ele por dentro de todas as novidades do processo em apenas um click.
                  Essa ferramenta foi feita pensando em aumentar ainda mais o relacionamento Advogado/cliente dando mais comodidade
                  para o seu cliente e assim diminuindo bastante o fluxo de ligações telefônicas á procura de novas informações.
                  A ferramenta ainda disponibiliza um campo de lembretes onde uma vez lançada datas, hora e local o próprio sistema
                  se encarrega de enviar antecipadamente os lembretes sobre as audiências para você Advogado e para o seu cliente.
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
        A Vasan disponibiliza de três modalidades de planos, conheça nossos planos e veja qual deles se
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
            <li><i class="ti-check"></i>Até 50 Clientes cadastrados</li>
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
            <li><i class="ti-check"></i>Até 100 Clientes cadastrados</li>
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
            <li><i class="ti-check"></i>Clientes ilimitados</li>
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
