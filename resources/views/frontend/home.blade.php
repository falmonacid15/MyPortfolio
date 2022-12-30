@extends('frontend.layouts.main')

@section('header')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                <div class="row">
                    <div class="col-md-4 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state1" countTo="70">{{$repositories->count()}}</span>
                            </h1>
                            <h5 class="mt-3">Repositorios</h5>
                            <p class="text-sm">// Cantidad de repositorios realizados
                            </p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">{{count($languages)}}</span>
                            </h1>
                            <h5 class="mt-3">Lenguajes</h5>
                            <p class="text-sm">// Cantidad de lenguajes utilizados</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary" id="state3" countTo="4">{{count($technologies)}}</h1>
                            <h5 class="mt-3">Tecnologias</h5>
                            <p class="text-sm">// Cantidad de tecnologias utilizadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('repositories')
    @foreach ($repositories as $repository)
        <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl"
            style="background-image: url({{ asset('assets/frontend/img/headerimage1.jpg') }});">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ms-lg-5">
                        <h1 class="text-white">{{ $repository->name }}</h1>
                        <p class="lead text-white opacity-8"> <strong>&lt;h3
                                class="repository-description"&gt;</strong> <br>
                             {{ $repository->description }}
                            <br>
                            <strong>&lt;/h3&gt;</strong>
                        </p>
                        <p>
                            @foreach ($repository->topics as $topic)
                                <span class="badge bg-gradient-info">{{$topic}}</span>
                            @endforeach
                        </p>
                        <a href="{{ $repository->html_url }}" class="text-white icon-move-right" target="_blank">
                            Ver más
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
