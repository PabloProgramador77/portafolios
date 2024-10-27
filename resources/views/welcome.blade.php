<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="token" content="{{ csrf_token(); }}">
        <meta name="author" content="PabloProgramador">
        <meta name="description" content="Desarrollo web personalizado de páginas, aplicaciones y sistemas administrativos para pymes de todo tipo">
        <title>PabloProgramador</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/00b567f7fc.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid col-md-12">

        <nav class="navbar fixed-top col-md-12 border-bottom shadow bg-white">
            <div class="container justify-content-center">
                <ul class="nav justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('media/img/logo.png') }}" alt="Logo" width="60px" height="auto">
                    </a>
                    <li class="nav-item my-3">
                        <a class="nav-link fw-semibold mx-4" href="#">
                            <i class="fa-solid fa-house"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link fw-semibold mx-4" href="#about">
                            <i class="fa-solid fa-address-card"></i> Acerca de
                        </a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link fw-semibold mx-4" href="#proyectos">
                            <i class="fa-solid fa-suitcase"></i> Proyectos
                        </a>
                    </li>
                    <!--<li class="nav-item my-3">
                        <a class="nav-link fw-semibold mx-4" href="#testimonios">
                            <i class="fa-solid fa-face-smile"></i> Testimonios
                        </a>
                    </li>-->
                    <li class="nav-item my-3">
                        <a class="nav-link fw-semibold mx-4" href="#blog">
                            <i class="fa-solid fa-face-smile"></i> Blog
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container bg-white overflow-auto">
            <div class="container-fluid col-lg-6 float-start">
                <img src="{{ asset('media/img/ceo.jpg') }}" alt="Imagen Banner" width="100%" class="shadow">
            </div>
            <div class="container-fluid col-lg-6 p-5 float-end">
                <img src="{{ asset('media/img/logo.png') }}" alt="Logo" width="240px" height="auto" class="m-auto d-block">
                <h1 class="text-center fs-1 fw-bold m-auto p-2">Hola, soy Pablo Sánchez</h1>
                <p class="text-center fs-4 fw-semibold m-auto p-2">Desarrollador y Sistematizador Web Administrativo de PyMES.</p>
                <a href="#about" class="m-auto text-center btn btn-primary p-2 d-block w-50 my-3 fw-semibold shadow">Acerca de mí</a>
            </div>
        </div>

        <div class="container overflow-auto my-5" id="about" style="background-image: url('media/img/panal (2).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container-fluid col-md-6 float-start">
                <h2 class="text-center fs-2 fw-bold m-auto p-2 my-3">PabloProgramador</h2>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Hola, mi nombre es <b>Pablo Sánchez</b>, me dedico al desarrollo y sistematización web de administración de PyMEs. 
                En español, desarrollo sistemas administrativos a la medida de todo tipo para pequeñas y medianas empresas.</p>
                </p>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Mis conocimientos abarcan el desarrollo de software en cada una de sus etapas: levantamiento de requerimientos, análisis 
                    y diseño de requerimientos, códificación y documentación, testing y despliegue de proyectos de software.
                </p>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Todos estos conocimientos y habilidades a tu disposición para impulsar tu PyME a precios accesibles.</p>
            </div>
            <div class="container-fluid col-md-6 float-end">
                <img src="{{ asset('media/img/profile2bg.png') }}" alt="Imagen Perfil" class="container p-5 rounded">
            </div>
        </div>

        <div class="container bg-white my-5">
            <div class="container-fluid p-2">
                <p class="fs-5 fw-semibold text-secondary">ESPECIALISTA WEB</p>
                <h2 class="fs-2 fw-bold p-2">HABILIDADES Y CONOCIMIENTOS</h2>
            </div>
            <div class="container-fluid row p-2 my-5">
                <div class="col-lg-4">
                    <p class="fs-6 fw-bold text-center text-info">TECNOLOGÍAS</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/html.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">HTML</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/css.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">CSS</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/js.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Javascript</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/php.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">PHP</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/ajax.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">AJAX</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/mysql.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="fs-6 fw-bold text-center text-info">METODOLOGÍAS DE DESARROLLO</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/ingenieria.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Ing. De Software</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/ux.jpeg') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">UX & UI</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/uml-logo.jpg') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">UML</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/ieee830.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">IEEE-830 1998</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="fs-6 fw-bold text-center text-info">OTRAS HERRAMIENTAS</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/laravel.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Laravel</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/bootstrap.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Bootstrap</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/figma.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Figma</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/firebase.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Firebase</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/git.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Git</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/cursor.svg') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">Cursor IDE</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/xml.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">XML</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/openssl.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">OpenSSL</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/sweetalert.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">SweetAlert</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('media/img/adminlte.png') }}" alt="HTML Icono" width="60px" height="auto" class="my-1 mx-5">
                            <span class="text-center fs-6 fw-semibold text-primary d-block border border-primary rounded">AdminLTE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-5 my-5" id="proyectos">
            <h2 class="fs-2 fw-bold text-center p-2">MI PORTAFOLIOS</h2>
            <p class="fs-5 fw-semibold text-center p-2 text-secondary border-4 border-bottom rounde w-50 m-auto">Proyectos Personalizados</p>
            <div class="container-fluid row">
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/logoColegioSnFco.jpg') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Títulos Electrónicos</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Diciembre 2019 - Enero 2020</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de información 
                        para crear títulos electrónicos de los alumnos egresados de la institución Colegio de San Francisco. Esto bajo 
                        los lineamientos y aprobación de la SEP y la DGP.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalTitulos">Ver Proyecto</a>
                </div>
                @include('titulos')
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/wingsmania_logo.jpg') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Wings Mania</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Septiembre 2020 - Actualidad</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de platillos, 
                        inventario, pedidos, corte de caja y toma de pedidos de forma remota en el restaurante Wings Mania. Actualmente 
                        esta bajo actualización y mantenimiento.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalWings">Ver Proyecto</a>
                </div>
                @include('wings')
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/logo-wbg.png') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Aydee Footwear</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Marzo 2023 - Actualidad</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de pedidos 
                        y agenda de actividades de estos, permitiendo a los empleados conocer las actividades que tienen por realizar de 
                        cada pedido. Actualmente en mantenimiento.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalAydee">Ver Proyecto</a>
                </div>
                @include('aydee')
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/logoColegioSnFco.jpg') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Certificados Electrónicos</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Junio 2022 - Julio 2022</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de información 
                        para crear certificados electrónicos de los alumnos egresados de la institución Colegio de San Francisco. Esto bajo 
                        los lineamientos y aprobación de la SEP y la DGP.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalCertificados">Ver Proyecto</a>
                </div>
                @include('certificados')
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/higienica.png') }}" alt="Imagen Higienica" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">La Higienica</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Octubre 2024</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de información, registro e impresión 
                        de notas, pedidos, prestamos y abonos de los clientes de la Carniceria conocida como La Higienica y La Higienica Premium.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalHigienica">Ver Proyecto</a>
                </div>
                @include('higienica')
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/wingsmania_logo.jpg') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Wings Mania Delivery</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Julio 2024 - Actualidad</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo personalizado de sistema para la gestión de platillos, 
                        inventario, pedidos, corte de caja y toma de pedidos a domicilio del restaurante Wings Mania. Actualmente 
                        esta bajo actualización y mantenimiento.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalWingsMania">Ver Proyecto</a>
                </div>
                @include('wingsmania')
            </div>

            <p class="fs-5 fw-semibold text-center p-2 text-secondary border-4 border-bottom rounded w-50 m-auto">Proyectos Personales</p>
            <div class="container-fluid row">
                <div class="col-lg-4 my-5">
                    <img src="{{ asset('media/img/2.png') }}" alt="Imagen Titulos" class="container p-2 shadow-lg rounded" height="350px">
                    <h3 class="fs-5 fw-semibold text-center p-2">Foodify</h3>
                    <span class="text-center fs-6 fw-semibold bg-secondary-subtle d-block rounded text-secondary p-2">Versión 2.0.0</span>
                    <p class="fs-6 fw-normal text-secondary text-center p-2">Desarrollo de plataforma web administrativa para PyMEs dedicadas 
                        a la producción y venta de alimentos y bebidas (restaurantes, bares, reposterías, cafeterías, etc.), adaptable a 
                        dispositivos móviles y capacidad de gestionar diversas áreas. Actualmente en fase de desarrollo.
                    </p>
                    <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalFoodify">Ver Proyecto</a>
                </div>
                @include('foodify')
            </div>
        </div>

        <!--<div class="container bg-secondary-subtle p-5 my-5 shadow-lg rounded" id="testimonios">
            <h3 class="text-center fs-2 fw-bold p-2 my-5">Clientes Satisfechos</h3>
            <div class="container bg-secondary overflow-auto p-3 my-5">
                <div class="col-lg-4 float-start">
                    <img src="{{ asset('media/img/wingsmania.jpg') }}" alt="" width="400px" height="200px" class="container">
                </div>
                <div class="col-lg-7 float-end">
                    <p class="text-white d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-white d-block fs-5 fw-bold">Ing. Oscar Noé Márquez Méndez</p>
                    <p class="text-white d-block fs-6 fw-normal">CEO DE WINGS MANIA</p>
                </div>
            </div>

            <div class="container bg-secondary-subtle overflow-auto p-3 my-5">
                
                <div class="col-lg-7 float-start">
                    <p class="text-secondary d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-secondary d-block fs-5 fw-bold">Lic. Victor Cesar Guillen</p>
                    <p class="text-secondary d-block fs-6 fw-normal">SUPERVISOR DE CONTROL ESCOLAR DE COLEGIO DE SAN FRANCISCO</p>
                </div>
                <div class="col-lg-4 float-end">
                    <img src="{{ asset('media/img/sete01.jpg') }}" alt="" width="330px" height="200px" class="container">
                </div>
            </div>

            <div class="container bg-secondary overflow-auto p-3 my-5">
                <div class="col-lg-4 float-start">
                    <img src="{{ asset('media/img/agenda.jpg') }}" alt="" width="400px" height="200px" class="container">
                </div>
                <div class="col-md-7 float-end">
                    <p class="text-white d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-white d-block fs-5 fw-bold">Ing. Andrea Gutierrez</p>
                    <p class="text-white d-block fs-6 fw-normal">CEO DE AYDEE FOOTWEAR</p>
                </div>
            </div>
        </div>-->

        <div class="container-fluid p-5 my-5" id="blog">
            <p class="fs-3 fw-bold text-center">Artículos</p>
            <p class="fs-5 fw-semibold text-center p-2 text-secondary border-4 border-bottom rounde w-50 m-auto">Novedades y curiosidades sobre el mundo del desarrollo web</p>
            <div class="container-fluid row">
                @foreach( $articulos as $articulo )
                    <div class="col-lg-4 my-5">
                        <img src="media/{{ $articulo->imgArticulo }}" alt="Artículo 01" class="container p-2 shadow-lg rounded" height="350px">
                        <h3 class="fs-5 fw-semibold text-center p-2">{{ $articulo->nombre }}</h3>
                        <a role="button" class="text-center btn btn-info d-block m-auto p-2 fw-semibold my-2" href="{{ $articulo->url }}" target="_blank">Ver Artículo</a>
                    </div>
                @endforeach
            </div>
        </div>

        <footer class="container-fluid bg-dark p-5 overflow-auto">
            <div class="col-lg-5 float-start">
                <img src="{{ asset('media/img/profile (2).png') }}" alt="" width="300px" height="auto">
            </div>
            <div class="col-lg-7 float-end">
                <h3 class="fs-4 fw-bold text-white">PabloProgramador</h3>
                <p class="fs-6 fw-normal text-white">"Si lo puedes imaginar, lo puedo programar"</p>
                <p class="fs-5 fw-semibold text-white">Datos de Contacto:</p>
                <ul class="text-white d-block">
                    <li class="list-group-item my-3">
                        <a href="https://www.facebook.com/pablodeveloper" class="text-white text-decoration-none" target="_blank">
                            <i class="fab fa-facebook"></i>
                            <p class="fs-6 fw-normal text-white d-inline">@pablodeveloper</p>
                        </a>
                    </li>
                    <li class="list-group-item my-3">
                        <a href="https://www.linkedin.com/in/pablo-sanchez-21621b209" class="text-white text-decoration-none" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                            <p class="fs-6 fw-normal text-white d-inline">@pablo-sanchez-21621b209</p>
                        </a>
                    </li>
                    <li class="list-group-item my-3">
                        <a href="#" class="text-white text-decoration-none" target="_blank">
                            <i class="fa-regular fa-envelope"></i>
                            <p class="fs-6 fw-normal text-white d-inline">pablo.programador777@gmail.com</p>
                        </a>
                    </li>
                    <li class="list-group-item my-3">
                        <a href="#" class="text-white text-decoration-none" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p class="fs-6 fw-normal text-white d-inline">+52 476 112 6020</p>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery-3.7.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/sweetAlert.js') }}" type="text/javascript"></script>
    </body>
</html>
