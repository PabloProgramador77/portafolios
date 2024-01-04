<x-adminlte-modal icon="fas fa-newspaper" id="modalEditar" title="Editar Artículo" theme="info" static-backdrop scrollable>

    <div class="container-fluid border-bottom">
        <p class="text-secondary"><b>Editar los datos como creas necesario</b>. Los campos con etiqueta * son obligatorios.</p>

        <form novalidate>
            <div class="form-group">
                <x-adminlte-input name="nombreEditar" id="nombreEditar" placeholder="* Nombre de artículo">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-info">
                            *<i class="fas fa-tag"></i> 
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input name="urlEditar" id="urlEditar" placeholder="* URL de artículo">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-info">
                            *<i class="fas fa-link"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
            <input type="hidden" name="idArticulo" id="idArticulo">
        </form>
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="primary" label="Guardar Cambios" id="actualizar" icon="fas fa-save"></x-adminlte-button>
        <x-adminlte-button theme="danger" label="Cancelar" id="cancelar" data-dismiss="modal" icon="fas fa-ban"></x-adminlte-button>
    </x-slot>
</x-adminlte-modal>