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
                <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus
                    torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi
                    commodo tristique nam hac luctus torquent</p>
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
                    <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce
                        nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat
                        phasellus placerat proin aptent pulvinar fusce nostra port</p>
                    <a class="button button-light" href="#">Saiba Mais</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about__img">
                    <img class="img-fluid" src="img/home/cel.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ about section end =================-->



<!--================ Solution section start =================-->
<section id="vasanadvogados" class="section-padding--small">
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
<section id="vasanglpi" class="section-padding--small bg-magnolia">
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
<section id="vasanlojavirtual" class="section-padding--small">
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


    

@endsection
