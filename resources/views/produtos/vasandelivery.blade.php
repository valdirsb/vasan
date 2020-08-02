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
                    <img class="img-fluid" src="{{asset ('img/home/cel.png')}}" alt="">
                </div>
                <p class="section-intro__subtitle">
                    Mauris diam ante, tristique eget nulla non, volutpat iaculis nibh. Praesent quis urna eget arcu ultrices placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce non felis maximus, semper dolor ornare, suscipit urna. Sed eget pharetra augue, auctor gravida urna. Sed sollicitudin consectetur nibh, id mattis nunc efficitur quis. Integer ut quam sed sapien iaculis condimentum. Sed ex nisi, efficitur et ultrices in, sagittis in turpi
                </p>
                <br>
                <p class="section-intro__subtitle">
                    Sed nec magna elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas aliquet eros in imperdiet dignissim. Pellentesque semper rhoncus fringilla. Donec laoreet velit et imperdiet mollis. Duis euismod interdum augue, vitae placerat tellus molestie quis. Donec nibh nulla, venenatis quis dui a, bibendum gravida neque. Duis sed tempor odio, a pulvinar lorem. Praesent pulvinar sodales mauris cursus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dictum pharetra molestie. Sed et quam sed magna scelerisque dignissim non vel dolor. Suspendisse elit dui, tincidunt eu egestas nec, tincidunt nec ante. Morbi vulputate commodo urna, id vestibulum ante lacinia quis. Pellentesque scelerisque sagittis feugiat. Maecenas semper, turpis eu tempor porta, lorem enim efficitur mauris, a tincidunt tortor nisi at dui.
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
        <h2 class="section-intro__title">Choose Your Plan</h2>
        <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <h4>Normal</h4>
              <p>Attend only first day</p>
              <h1 class="card-pricing__price"><span>$</span>45.00</h1>
            </div>
            <ul class="card-pricing__list">
              <li><i class="ti-check"></i>Unlimited Entrance</li>
              <li><i class="ti-check"></i>Comfortable Seat</li>
              <li><i class="ti-check"></i>Paid Certificate</li>
              <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
              <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
            </ul>
            <div class="card-pricing__footer">
              <button class="button button-light">Buy Now</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <h4>Advanced</h4>
              <p>Attend only first day</p>
              <h1 class="card-pricing__price"><span>$</span>55.00</h1>
            </div>
            <ul class="card-pricing__list">
              <li><i class="ti-check"></i>Unlimited Entrance</li>
              <li><i class="ti-check"></i>Comfortable Seat</li>
              <li><i class="ti-check"></i>Paid Certificate</li>
              <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
              <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
            </ul>
            <div class="card-pricing__footer">
              <button class="button button-light">Buy Now</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <h4>Ultimate</h4>
              <p>Attend only first day</p>
              <h1 class="card-pricing__price"><span>$</span>65.00</h1>
            </div>
            <ul class="card-pricing__list">
              <li><i class="ti-check"></i>Unlimited Entrance</li>
              <li><i class="ti-check"></i>Comfortable Seat</li>
              <li><i class="ti-check"></i>Paid Certificate</li>
              <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
              <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
            </ul>
            <div class="card-pricing__footer">
              <button class="button button-light">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Pricing section end =================-->





    

@endsection
