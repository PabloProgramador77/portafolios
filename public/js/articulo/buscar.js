jQuery.noConflict();
jQuery(document).ready(function(){

    $(".editar").on('click', function(e){

        e.preventDefault();

        $.ajax({

            type: 'POST',
            url: '/articulo/buscar',
            data:{

                'id' : $(this).attr('data-id')

            },
            dataType: 'json',
            encode: true

        }).done(function(respuesta){

            if( respuesta.exito ){

                $("#nombreEditar").val( respuesta.nombre );
                $("#urlEditar").val(respuesta.url);
                $("#portadaEditar").val(respuesta.img);
                $("#idArticulo").val($(this).attr('data-id'));

            }else{

                Swal.fire({

                    icon: 'error',
                    title: respuesta.mensaje,
                    allowOutsideClick: false,
                    showConfirmButton: true

                }).then((resultado)=>{

                    if( resultado.isConfirmed ){

                        window.location.href = '/articulos';

                    }

                });

            }

        });

    });

});