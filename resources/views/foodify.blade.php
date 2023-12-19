<div class="modal fade" tabindex="-1" id="modalFoodify" aria-labelledby="modalFoodifyLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Foodify</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="p-2 text-secondary fw-normal fs-6">Plataforma web con la capacidad de administrar la información de platillos
                    insumos, pedidos, usuarios, descuentos, cortes de caja, otras 
                    características más, así como adaptabilidad a cualquier tamaño de pantalla. 
                    El desarrollo de este proyecto esta diseñado y pensado con mejoras de todas las características implementadas en el 
                    proyecto de Wings Mania, enfocado para que sirva para cualquier negocio de restaurante, cafetería, bar, repostería, etc. 
                    Actualmente se encuentra bajo constante mantenimiento y actualización.
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
                            <img src="{{ asset('media/img/foodify01.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/foodify02.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/foodify03.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/foodify04.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/foodify05.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('media/img/foodify06.png') }}" alt="Imagen 1 SETE" class="bd-placeholder-img shadow rounded" aria-hideden="true" width="100%" height="auto" preserveAspectRadio="xMidYMid slice" focusable="false">    
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-2">
                    <p class="p-2 text-secondary fw-normal fs-6 border-bottom">Los módulos creados para este proyectos fueron:</p>
                    <div class="container row">
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de usuarios</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de platillos</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de pedidos</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de categorías de menú</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de caja</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de cortes de caja</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Administración de movimientos de caja</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Toma de pedidos desde dispositivos móviles y tabletas</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Impresión de comandas en cocina</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Tickets de pago</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="p-2 text-secondary fw-normal fs-6 bg-secondary-subtle">Personalización de platillos de clientes</p>
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
                        </div>
                    </div>
                </div>
                <a href="https://restaurante.pabloprogramador.com.mx" class="btn btn-primary d-block w-50 m-auto my-5" role="button" target="_blank">Versión de Demostración</a>
                <p class="p-2 bg-danger-subtle text-center fw-semibold">Algunas funciones se encuentran desactivadas por razones de seguridad.</p>
            </div>
        </div>
    </div>
</div>