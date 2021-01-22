<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Euromav @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">


</head>

<body>

    <!-- Header -->
	<header id="header">

        <div class="header-nav">

			<div class="row">

				<div class="logo">
					@if (route('home'))
						<a href="{{ route('home') }}" class="logo-main"><img src="{{ asset('assets/images/logo-euromav.png') }}" alt=""></a>
                    @else
						<a href="{{ route('home') }}" class="logo-main"><img class="img-fluid" src="{{ asset('assets/images/logo-euromav.png') }}" alt=""></a>
                    @endif
					<a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid" src="{{ asset('assets/images/logo-euromav.png') }}" alt=""></a>
				</div>

				<div class="menu">

					<nav class="nav">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('home') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('quemsomos.index') }}">Sobre Nós</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Suporte</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
							</li>
						</ul>
					</nav>

				</div>

				<div class="contato">
					<div>
						<a href="tel:5565454117">
							<span class="phone-box"><i class="fas fa-phone"></i></span> <span>11 4232-3648</span>
						</a>
					</div>
				</div>

				<a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
					<span></span>
					<span></span>
					<span></span>
				</a>

			</div>

		</div>

		<!--Side Nav-->
		<div class="side-menu hidden">
			<div class="inner-wrapper">
				<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
				<nav class="side-nav w-100">
					<ul class="navbar-nav">
						<li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Suporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contato</a>
                        </li>
					</ul>
				</nav>

			</div>

		</div>
		
		<a id="close_side_menu" href="javascript:void(0);"></a>

	</header>
	<!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row links">

                    <div class="col-xs-12 col-sm-4 col-md-4 item-link">
                        <img class="img-fluid mb-2" src="{{ asset('assets/images/logo-euromav.png') }}" alt="">
                    
                        
                        <p><b>EUROMAV - Serviços de Manutenção em Equipamentos Hidráulicos e Eletrônicos</b></p>
                            
                        <p>R. Lourdes, 443 - Nova Gerti<br>
                            São Caetano do Sul - SP - CEP: 09571-470<br>
                            11 4232-3648 / 11 4232-2574 
                        </p>

                        <ul class="social list-inline">
                            <li>
                                <a href="https://www.facebook.com/basilarcomercialeconstrutora" target="_blank" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href="mailto:basilar@basilarconstrutora.com.br" target="_blank" class="instagram">
                                    <i class="far fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    
                    </div>

                <div class="col-xs-12 col-sm-3 col-md-3 item-link">
                    
                        
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5 item-link">
                    
                    <h3>Cadastre-se e Receba Novidades</h3>
                    <h5>Tenha certeza de que receberá somente mensagens de grandes oportunidades.</h5>

                    <div class="msg-sucesso" style="background: #40a24f;padding: 5px;color: #fff;font-weight: bold;margin-bottom: 10px;display: none;"></div>
                    <div class="msg-erro" style="background: #e42f2f;padding: 5px;color: #fff;font-weight: bold;margin-bottom: 10px;display: none;"></div>

                    <div class="form-newsletter">
                            
                        <form id="form-newsletter" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="email_newsletter" placeholder="Seu e-mail">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Enviar <i class="fas fa-arrow-right ml-2"></i></button>
                            </div>

                        </form>

                    </div>

                    
                                        
                </div>


            </div>

        </div>
    
    </div>

    <div class="bottom-footer">

        <div class="container">

            <div class="clearfix">

                <p class="col-sm-12 col-md-6 col-lg-6 copy">
                    © 2020 Euromav - Todos os direitos reservados
                </p>

                <p class="col-sm-12 col-md-6 col-lg-6 dev">
                    Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90" src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                </p>

            </div>

        </div>

    </div>

</footer>
<!-- End Footer -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>

</body>

</html>
