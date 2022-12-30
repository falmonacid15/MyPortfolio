<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/img/favicon-16x16.png') }}">
    <title>
        Portafolio | Felipe Almonacid
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/frontend/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('assets/frontend/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
</head>

<body class="index-page" id="home">
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="#home" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom">
                            Felipe Almonacid | Portafolio
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                        href="#repos-list" aria-expanded="false">
                                        // Mi trabajo
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                        href="#about-me" aria-expanded="false">
                                        // Sobre mi
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="https://github.com/falmonacid15"
                                        target="_blank">
                                        <i class="fa fa-github me-1"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Sigueme en GitHub">Github</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <header class="header-2">
        <div class="page-header min-vh-75 relative"
            style="background-image: url({{ asset('assets/frontend/img/headerimage1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Felipe Almonacid</h1>
                        <p class="lead text-white mt-3">// Desarrollador Web
                        </p>
                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
    </header>

    <section class="pt-3 pb-4" id="count-stats">
        @yield('header')
    </section>

    <section class="py-5" id="repos-list">
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5 mt-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="text-primary text-gradient mb-0">Mi trabajo</h2>
                        <h2 class="">Vista previa repositorios</h2>
                        <p class="lead">// Listado de todos los proyectos que he realizado </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-sm-5">
            @yield('repositories')
        </div>
    </section>

    <section class="pt-lg-7 pt-5" id="about-me">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 order-2 order-md-2 order-lg-1">
                    <div
                        class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
                        <div
                            class="bg-gradient-primary w-60 h-100 border-radius-xl position-absolute d-lg-block d-none">
                        </div>
                        <img src="{{ asset('assets/frontend/img/modo empresario.png') }}"
                            class="w-60 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
                    <div class="p-3 pt-0">

                        <h4 class="text-gradient text-primary mb-0">Sobre mi</h4>
                        <h4 class="mb-4"><a href="https://github.com/falmonacid15" target="blank"
                                rel="nofollow">Felipe Almonacid</a></h4>
                        <p>Soy un joven entusiasta por el desarrollo web, enfocado siempre en aprender nuevas
                            tecnologias.<br>
                            <br>Actualmente me encuentro desarrollando con el lenguaje PHP haciendo uso del framework
                            Laravel.
                        </p>
                        <a href="#repos-list" rel="nofollow" class="text-dark icon-move-right">Mira mi trabajo
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ms-auto">
                    <h4 class="mb-1">Contacto</h4>
                    <p class="lead mb-0">Tambien puedes encontrarme aqui</p>
                </div>
                <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                    <a href="https://github.com/falmonacid15" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-github me-1" aria-hidden="true"></i> GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/falmonacid-dev/" class="btn btn-info mb-0 me-2"
                        target="_blank">
                        <i class="fab fa-linkedin me-1" aria-hidden="true"></i> Linked in
                    </a>
                    <a href="#" class="btn btn-primary mb-0 me-2" target="_blank">
                        <i class="fas fa-envelope-square me-1" aria-hidden="true"></i> Gmail
                    </a>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-12 mb-4 ms-auto">
                    <div>
                        <h6 class="text-gradient text-primary font-weight-bolder">Felipe Almonacid | Desarrollador Web
                        </h6>
                    </div>
                    <div>
                        <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/falmonacid15" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1"
                                    href="https://stackoverflow.com/users/20688030/felipe-almonacid" target="_blank">
                                    <i class="fab fa-stack-overflow text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.linkedin.com/in/falmonacid-dev/"
                                    target="_blank">
                                    <i class="fab fa-linkedin text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="mailto:felipe.almonacidgallardo@gmail.com"
                                    target="_blank">
                                    <i class="fas fa-envelope text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            Todos los derechos reservados. Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> MyPortfolio por <a href="https://github.com/falmonacid15"
                                target="_blank">Felipe Almonacid</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/frontend/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/plugins/perfect-scrollbar.min.js') }}"></script>
</body>

</html>
