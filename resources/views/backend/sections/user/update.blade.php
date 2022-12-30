@extends('backend.layouts.main')

@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Configuracion de usuario</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Actualizar credenciales</h6>
            </nav>
        </div>
    </nav>
@endsection

@section('content')
    <section>
        <div class="container py-4">
            @if (session()->has('flash'))
                <div class="alert alert-success alert-dismissible">
                    <h5><i class="icon fas fa-check"></i> Notificación</h5>
                    {{ session()->get('flash') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <h3 class="text-center">Datos de usuario</h3>
                    <form role="form" method="POST" action="{{ route('user.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nombre</label>
                                    <div class="input-group mb-4">
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nombre..." aria-label="Nombre..." type="text" name="name"
                                            id="name" value="{{ old('name', $getUser->name) }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label>Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email..." name="email" id="email"
                                        value="{{ old('email', $getUser->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Contraseña..." name="password" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-gradient-dark w-100">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
