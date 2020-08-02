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

    

@endsection
