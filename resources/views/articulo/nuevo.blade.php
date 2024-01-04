<x-adminlte-modal icon="fas fa-newspaper" id="modalNuevo" title="Nuevo Artículo" theme="primary" static-backdrop scrollable>
    <div class="container-fluid border-bottom">
        <p class="text-secondary">Los campos con etiqueta * son obligatorios.</p>
        <form novalidate>
            <div class="form-group">
                <x-adminlte-input name="nombre" id="nombre" placeholder="* Nombre de artículo">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-info">
                            *<i class="fas fa-tag"></i> 
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input name="url" id="url" placeholder="* URL de artículo">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-info">
                            *<i class="fas fa-link"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input-file name="portada" id="portada" placeholder="Elige una imagen de portada.">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-info">
                            *<i class="fas fa-image"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
            </div>
        </form>
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="primary" label="Registrar" id="registrar" icon="fas fa-save"></x-adminlte-button>
        <x-adminlte-button theme="danger" label="Cancelar" id="cancelar" data-dismiss="modal" icon="fas fa-ban"></x-adminlte-button>
    </x-slot>
</x-adminlte-modal>