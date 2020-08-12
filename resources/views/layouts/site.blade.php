<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
	<link rel="icon" href="{{ asset('img/Fevicon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{asset ('/')}}"><img src="{{asset ('img/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item @yield('home-active')"><a class="nav-link" href="{{asset ('/')}}">Home</a></li> 
			<li class="nav-item @yield('quemsomos-active')"><a class="nav-link" href="{{asset ('quemsomos')}}">Quem Somos</a></li> 
              <li class="nav-item submenu dropdown @yield('servicos-active')">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">O que fazemos</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="{{asset ('servicos')}}">Serviços</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{asset ('produtos')}}">produtos</a></li>
                </ul>
							</li>
              <li class="nav-item @yield('portifolio-active')"><a class="nav-link" href="#">Portifólio</a>
              
              <li class="nav-item @yield('faleconosco-active')"><a class="nav-link" href="{{asset ('faleconosco')}}">Fale Conosco</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    @yield('content')
  </main>


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Quem Somos</h4>
					<ul>
						<li><a href="{{asset ('quemsomos/#missao')}}">Missão</a></li>
						<li><a href="{{asset ('quemsomos/#visao')}}">Visão</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Serviços</h4>
					<ul>
						<li><a href="{{asset ('servicos')}}">Criação de Sites</a></li>
						<li><a href="{{asset ('servicos')}}">Aplicativos</a></li>
						<li><a href="{{asset ('servicos')}}">Sistemas</a></li>
						<li><a href="{{asset ('servicos')}}">Identidade Visual</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Produtos</h4>
					<ul>
						<li><a href="{{asset ('produtos/#vasandelivery')}}">VasanDelivery</a></li>
						<li><a href="{{asset ('produtos/#vasanlojavirtual')}}">VasanLojaVirtual</a></li>
						<li><a href="{{asset ('produtos/#vasanadvogados')}}">VasanAdvogados</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Vasan</h4>
					<ul>
            <li><a href="#">Portifólio</a></li>
            <li><a href="{{asset ('faleconosco')}}">Fale Conosco</a></li>
					</ul>
				</div>
				<div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
					<h4>Noticias</h4>
					<p>Cadastre seu e-mail e fique por dentro das novidades.</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="#"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default">Se Inscreva</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="https://www.facebook.com/Vasan-578783189470148/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/vasan.tecnologia" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://api.whatsapp.com/send?phone=5581984594763" target="_blank"><i class="fab fa-whatsapp"></i></a>
					
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>