@extends('layouts.app')

@section('title', '- Serviços' )

@section('content')

    <div id="servicos">

        <div class="page-title-content">

            <div class="container">
                <h1>Serviços</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Serviços</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row segmentos">

                    <div class="col-md-4 item">

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

                    <div class="col-md-4 item">

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

                    <div class="col-md-4 item">

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

    </div>

@endsection
