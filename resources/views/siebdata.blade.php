<div class="modal fade" tabindex="-1" id="modalSiebdata" aria-labelledby="modalSiebdataLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SIEBDATA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="p-2 text-secondary fw-normal fs-6">Es un sistema web con la capacidad de administrar la información de alumnos 
                    egresados, responsables de firma, planes de estudio, asignaturas, calificaciones de asignaturas, así como archivar y descifrar firmas electrónicas; con las cuales 
                    se realiza el sellado/firmado de los archivos XML que posteriormente se crean y descargan para tramitar el título y 
                    cédula electrónica de los egresados de la institución educativa privada. El desarrollo fue totalmente basado en 
                    el proyecto del <b>Colegio de San Francisco</b> con la intención de realizar mejoras de todo tipo y enfocado para su 
                    uso por cualquier IPES (Institución Privada de Educación Superior).
                </p>
                <div class="carousel slide mb-6 pointer-event" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class="active"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5" class="active"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6" class="active"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('media/img/siebdata01.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/siebdata02.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/siebdata03.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/siebdata04.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/siebdata05.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/siebdata06.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-2">
                    <p class="p-2 text-secondary fw-normal fs-6 border-bottom">Los módulos creados para este proyectos fueron:</p>
                    <div class="container row">
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de alumnos</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de responsables de firma</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de planes de estudio</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de expediciones</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de calificaciones</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de usuarios</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de asignaturas</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de archivos XML</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-2">
                    <p class="p-2 text-secondary fw-normal fs-6 border-bottom">Fue desarrollado con las tecnologías siguientes:</p>
                    <div class="container row text-center">
                        <div class="col-lg-12 my-3">
                            <img src="{{ asset('media/img/html.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/bootstrap.png') }}" alt="Icono CSS" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/php.png') }}" alt="Icono PHP" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/laravel.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/sweetalert.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/js.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/mysql.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/adminlte.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/git.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/pdf.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/openssl.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/xml.png') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                            <img src="{{ asset('media/img/uml-logo.jpg') }}" alt="Icono HTML" width="60px" height="auto" class="m-auto p-1 shadow">
                        </div>
                    </div>
                </div>
                <a href="https://siebdata.pabloprogramador.com.mx" class="btn btn-primary d-block w-50 m-auto my-5" role="button" target="_blank">Versión de Demostración</a>
                <p class="p-2 bg-danger-subtle text-center fw-semibold">Algunas funciones se encuentran desactivadas por razones de seguridad.</p>
            </div>
        </div>
    </div>
</div>