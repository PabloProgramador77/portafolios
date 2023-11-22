<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="token" content="{{ csrf_token(); }}">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/00b567f7fc.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid col-md-12">

        <nav class="navbar fixed-top col-md-12 border-bottom shadow bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('media/img/logo.png') }}" alt="Logo" width="60px" height="auto">
                </a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonios</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container bg-white overflow-auto">
            <div class="container-fluid col-md-6 float-start">
                <img src="{{ asset('media/img/ceo.jpg') }}" alt="Imagen Banner" class="container-fluid">
            </div>
            <div class="container-fluid col-md-6 p-5 float-end">
                <img src="{{ asset('media/img/logo.png') }}" alt="Logo" width="240px" height="auto" class="m-auto d-block">
                <h1 class="text-center fs-1 fw-bold m-auto p-2">PabloProgramador</h1>
                <p class="text-center fs-4 fw-semibold m-auto p-2">Desarrollador y Sistematizador Web Administrativo de PyMES.</p>
                <a href="#" class="m-auto text-center btn btn-primary p-2 d-block w-50 my-3 fw-semibold shadow">Acerca de mí</a>
            </div>
        </div>

        <div class="container bg-secondary-subtle overflow-auto my-5">
            <div class="container-fluid col-md-6 float-start">
                <h2 class="text-center fs-2 fw-bold m-auto p-2">Sobre mí</h2>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Hola, mi nombre es <b>Pablo Sánchez</b>, me dedico al desarrollo y sistematización web de administración de PyMEs. 
                En español, desarrollo sistemas administrativos a la medida de todo tipo para pequeñas y medianas empresas.</p>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Actualmente en 2024 cuento con 3 años de experiencia en la industria desarrollando diversos proyectos para PyMEs de 
                    mi ciudad natal, teniendo un 100% de exito en estos.
                </p>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Tengo conocimientos en el desarrollo de software en cada una de sus etapas: levantamiento de requerimientos, análisis 
                    y diseño de requerimientos, códificación y documentación, testing y despliegue de proyectos de software.
                </p>
                <p class="fs-5 fw-semibold text-center p-2 my-2">Todos estos conocimientos y habilidades a tu disposición para impulsar tu PyME a precios accesibles.</p>
            </div>
            <div class="container-fluid col-md-6 float-end">
                <img src="{{ asset('media/img/profile2.jpeg') }}" alt="Imagen Perfil" class="container p-5">
            </div>
        </div>

        <div class="container bg-white my-5">
            <div class="container-fluid p-2">
                <p class="fs-5 fw-semibold text-secondary">ESPECIALISTA WEB</p>
                <h2 class="fs-2 fw-bold p-2">HABILIDADES Y CONOCIMIENTOS</h2>
            </div>
            <div class="container-fluid row p-2 my-5">
                <div class="col-md-4">
                    <p class="fs-6 fw-bold text-center">LENGUAJES DE PROGRAMACIÓN</p>
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">HTML</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 77%;"></span>
                        </span>
                    </div>
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">CSS</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">JAVASCRIPT</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 45%;"></span>
                        </span>
                    </div>
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">PHP</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 85%;"></span>
                        </span>
                    </div>
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">AJAX</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 20%;"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="fs-6 fw-bold text-center">METODOLOGÍAS DE DESARROLLO</p>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">ARQUITECTURA DE SOFTWARE</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">METODOLOGÍA ÁGILES DE DESARROLLO</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 45%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">UX & UI</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">UML</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="fs-6 fw-bold text-center">OTRAS HERRAMIENTAS</p>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">FRAMEWORK LARAVEL</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 77%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">FIGMA</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">MYSQL</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 80%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">MYSQL WORKBENCH</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 50%;"></span>
                        </span>
                    </div>
                    
                    <div class="container-fluid p-2">
                        <p class="fs-6 fw-semibold text-secondary">GIT</p>
                        <span class="bg-white border d-block">
                            <span class="bg-secondary d-block p-2" style="width: 40%;"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-secondary p-5 my-5">
            <h2 class="fs-2 fw-bold text-white text-center p-2">MI PORTAFOLIOS</h2>
            <div class="container-fluid row">
                <div class="col-md-4 my-5">
                    <img src="{{ asset('media/img/sete01.jpg') }}" alt="Imagen Titulos" class="container p-2" height="400px">
                    <h3 class="fs-5 fw-semibold text-white text-center p-2">Títulos Electrónicos</h3>
                    <p class="fs-6 fw-normal text-white text-center p-2">Desarrollo personalizado de sistema para la gestión de información 
                        para crear títulos electrónicos de los alumnos egresados de la institución Colegio de San Francisco. Esto bajo 
                        los lineamientos y aprobación de la SEP y la DGP.
                    </p>
                    <a href="#" class="text-center btn btn-info d-block m-auto p-2 fw-semibold">Ver Proyecto</a>
                </div>
                <div class="col-md-4 my-5">
                    <img src="{{ asset('media/img/card01.jpg') }}" alt="Imagen Titulos" class="container p-2" height="400px">
                    <h3 class="fs-5 fw-semibold text-white text-center p-2">Wings Mania</h3>
                    <p class="fs-6 fw-normal text-white text-center p-2">Desarrollo personalizado de sistema para la gestión de platillos, 
                        inventario, pedidos, corte de caja y toma de pedidos de forma remota en el restaurante Wings Mania. Actualmente 
                        esta bajo actualización y mantenimiento.
                    </p>
                    <a href="#" class="text-center btn btn-info d-block m-auto p-2 fw-semibold">Ver Proyecto</a>
                </div>
                <div class="col-md-4 my-5">
                    <img src="{{ asset('media/img/certificados.jpg') }}" alt="Imagen Titulos" class="container p-2" height="400px">
                    <h3 class="fs-5 fw-semibold text-white text-center p-2">Certificados Electrónicos</h3>
                    <p class="fs-6 fw-normal text-white text-center p-2">Desarrollo personalizado de sistema para la gestión de información 
                        para crear certificados electrónicos de los alumnos egresados de la institución Colegio de San Francisco. Esto bajo 
                        los lineamientos y aprobación de la SEP y la DGP.
                    </p>
                    <a href="#" class="text-center btn btn-info d-block m-auto p-2 fw-semibold">Ver Proyecto</a>
                </div>
                <div class="col-md-4 my-5">
                    <img src="{{ asset('media/img/agenda.jpg') }}" alt="Imagen Titulos" class="container p-2" height="400px">
                    <h3 class="fs-5 fw-semibold text-white text-center p-2">Aydee Footwear</h3>
                    <p class="fs-6 fw-normal text-white text-center p-2">Desarrollo personalizado de sistema para la gestión de pedidos 
                        y agenda de actividades de estos, permitiendo a los empleados conocer las actividades que tienen por realizar de 
                        cada pedido. Actualmente en mantenimiento.
                    </p>
                    <a href="#" class="text-center btn btn-info d-block m-auto p-2 fw-semibold">Ver Proyecto</a>
                </div>
            </div>
        </div>

        <div class="container bg-white p-5 my-5">
            <div class="container bg-secondary overflow-auto p-2">
                <div class="col-md-4 float-start">
                    <img src="{{ asset('media/img/wingsmania.jpg') }}" alt="" width="400px" height="200px">
                </div>
                <div class="col-md-7 float-end">
                    <p class="text-white d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-white d-block fs-5 fw-bold">Ing. Oscar Noé Márquez Méndez</p>
                    <p class="text-white d-block fs-6 fw-normal">CEO DE WINGS MANIA</p>
                </div>
            </div>

            <div class="container bg-secondary-subtle overflow-auto p-2">
                
                <div class="col-md-7 float-start">
                    <p class="text-secondary d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-secondary d-block fs-5 fw-bold">Lic. Victor Cesar Guillen</p>
                    <p class="text-secondary d-block fs-6 fw-normal">SUPERVISOR DE CONTROL ESCOLAR DE COLEGIO DE SAN FRANCISCO</p>
                </div>
                <div class="col-md-4 float-end">
                    <img src="{{ asset('media/img/sete01.jpg') }}" alt="" width="330px" height="200px">
                </div>
            </div>

            <div class="container bg-secondary overflow-auto p-2">
                <div class="col-md-4 float-start">
                    <img src="{{ asset('media/img/agenda.jpg') }}" alt="" width="400px" height="200px">
                </div>
                <div class="col-md-7 float-end">
                    <p class="text-white d-block fs-5 fw-semibold">"asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj 
                    asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj asjdkasjdj"</p>
                    <p class="text-white d-block fs-5 fw-bold">Ing. Andrea Gutierrez</p>
                    <p class="text-white d-block fs-6 fw-normal">CEO DE AYDEE FOOTWEAR</p>
                </div>
            </div>
        </div>

        <footer class="container-fluid bg-dark p-5 overflow-auto">
            <div class="col-md-5 float-start">
                <img src="{{ asset('media/img/profile (2).png') }}" alt="" width="300px" height="auto">
            </div>
            <div class="col-md-7 float-end">
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
        
    </body>
</html>
