jQuery.noConflict();
jQuery(document).ready(function(){

    $("#agenda").on('click', function(e){

        e.preventDefault();

        Swal.fire({

            icon: 'info',
            title: 'Proximamente.',
            title: 'Proyecto bajo análisis y diseño. Cuando este listo será publicado.',
            allowOutsideClick: false,

        });

    });

});