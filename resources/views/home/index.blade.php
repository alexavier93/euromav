@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home">


        <!-- Banner Section -->

        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">

                @foreach ($banners as $banner)
                    @if ($banner->status == 1)
                        <!-- Slide Item -->
                        <div class="slide-item"
                            style="background-image: url('{{ asset('storage/' . $banner->image) }}');">

                            <div class="container">

                                <div class="content-box">

                                    <h2>{{ $banner->title }}</h2>

                                    <p class="descricao">
                                        {{ $banner->description }}
                                    </p>

                                    <div class="btn-box">
                                        <a href="{{ $banner->link }}" class="theme-btn btn-style-two">
                                            <span class="btn-title">Conheça Mais</span> <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>

        </section>

        <section class="info_home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-6 info-cards">

                        <div class="row">

                            <div class="col-md-6 col-lg-6">

                                <div class="info-item mb-3">
                                    <div class="item-icon"><i class="fas fa-comments"></i></div>
                                    <div class="info-meta">
                                        <h6>Entre em Contato</h6>
                                        Whatsapp: 11 99999-88888<br>
                                        comercial@euromav.com.br        
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-6">

                                <div class="info-item">
                                    <div class="item-icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="info-meta">
                                        <h6>Onde Estamos</h6>
                                        R. Lourdes, 443 - Nova Gerti<br>
                                        S. C. do Sul - SP - CEP: 09571-470  
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 col-lg-6">

                        <div class="saiba-mais-info">

                            <h2>Serviços de Manutenção em<br> Equipamentos Hidráulicos e<br> Eletrônicos</h2>
                            <p>Fale com nossa equipe<br> hoje mesmo.</p>
                            <a class="saiba-mais" href="http://basilarconstrutora.com.br/imoveis" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>

                        </div>

                    </div>


                </div>

            </div>

        </section>

        <section class="servicos_home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Qualidade e Agilidade</h2>
                    </div>
                </div>

                <div>

  
                    <div class="owl-theme owl-carousel servicos-carousel">

                            <div class="item">

                                <div class="card">

                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('assets/images/img-01.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="content">

                                        <span class="label">Lorem Ipsum Dolor</span>

                                        <span class="titulo">Hidro Magma Pumpo</span>

                                        <div class="descricao">
                                            <p>Proin ullamcorper est magna, vel consequat enim blandit quis. Maecenas pharetra ullamcorper varius.</p>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="btn-mais" href="" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="card">

                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('assets/images/img-01.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="content">

                                        <span class="label">Lorem Ipsum Dolor</span>

                                        <span class="titulo">Hidro Magma Pumpo</span>

                                        <div class="descricao">
                                            <p>Proin ullamcorper est magna, vel consequat enim blandit quis. Maecenas pharetra ullamcorper varius.</p>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="btn-mais" href="" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="card">

                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('assets/images/img-01.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="content">

                                        <span class="label">Lorem Ipsum Dolor</span>

                                        <span class="titulo">Hidro Magma Pumpo</span>

                                        <div class="descricao">
                                            <p>Proin ullamcorper est magna, vel consequat enim blandit quis. Maecenas pharetra ullamcorper varius.</p>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="btn-mais" href="" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="card">

                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('assets/images/img-01.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="content">

                                        <span class="label">Lorem Ipsum Dolor</span>

                                        <span class="titulo">Hidro Magma Pumpo</span>

                                        <div class="descricao">
                                            <p>Proin ullamcorper est magna, vel consequat enim blandit quis. Maecenas pharetra ullamcorper varius.</p>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="btn-mais" href="" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="card">

                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('assets/images/img-01.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="content">

                                        <span class="label">Lorem Ipsum Dolor</span>

                                        <span class="titulo">Hidro Magma Pumpo</span>

                                        <div class="descricao">
                                            <p>Proin ullamcorper est magna, vel consequat enim blandit quis. Maecenas pharetra ullamcorper varius.</p>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="btn-mais" href="" target="_blank">Saiba Mais<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>


                    </div>

                </div>

            </div>

        </section>


        <section class="empresa_home">

            <div class="escopo">

                <div class="row">

                    <div class="col-texto">

                        <h6>Tradição e Confiança</h6>

                        <h2 class="titulo">Construindo Conquistas</h2>

                        <p class="texto">A EUROMAV foi fundada em 2006 com sede em São Caetano do Sul - SP, atuando no ramo de hidráulica industrial em geral. Uma empresa cujo principal objetivo é a perfeição dos serviços de manutenção e produtos fabricados.</p>
                        <p class="texto">Preocupada com a satisfação dos clientes, busca aprimorar o conhecimento e inovar na especialização da mão de obra, o que garante a qualidade dos produtos e serviços prestados.</p>
                        <p class="texto">Equipada de bancadas de teste de fabricação própria, realiza manutenção e teste em equipamentos como cilindros, servo cilindros, válvulas direcionais e proporcionais, motores hidráulicos, bombas, servo válvulas, reformas de unidades hidráulicas, etc... Temos ainda um laboratório para manutenção e teste em equipamentos eletrônicos.</p>

                    </div>

                    <div class="col-img">
                        <img class="" src="{{ asset('assets/images/empresa.jpg') }}" alt="">
                    </div>

                </div>

            </div>

        </section>


        <section class="contato_home">

            <div class="container">

                <div class="content-wrapper">

                    <div class="row">

                        <div class="col-lg-4 col-md-12">

                            <div class="box-info">

                                <h1>Precisando de Manutenção?</h1>

                                <hr>

                                <h2 class="mb-5">Nós temos a solução na medida certa para você!</h2>

                                <a href="tel:5565454117"><span class="phone-box"><i class="fas fa-phone"></i></span>
                                    <span>11 4232-3648</span></a>
                            </div>


                        </div>

                        <div class="col-lg-8 col-md-12">

                            <div class="form-contato">

                                <form action="">

                                    <div class="row">

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nome" placeholder="Nome"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="nome" placeholder="E-mail"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nome" placeholder="Telefone"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <select name="cidade" class="form-control" require>
                                                    <option>Selecione uma cidade</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="mensagem" rows="8"
                                                    placeholder="Mensagem" require></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Enviar Mensagem <i
                                                        class="fas fa-arrow-right ml-2"></i></button>
                                            </div>
                                        </div>


                                    </div>


                                </form>

                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </section>

    </div>
    <!-- End Home -->

@endsection
