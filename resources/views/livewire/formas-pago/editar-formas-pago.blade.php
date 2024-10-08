<div>
    <x-modal-default title="Editar FormaPago: {{ $model->nombre }}" name="Editar-Formas-Pago">
        <x-slot:body>
            <div class="p-4">
                <form wire:submit.prevent="editarFormasPago({{ $model->id }})" class="gap-3 d-flex flex-column">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <x-input type="text" wire:model="nombre" class="form-control" />
                        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="gap-3 d-flex justify-content-end">
                        <x-button type="submit" class="btn btn-primary">
                            Guardar
                        </x-button>
                    </div>
                </form>
            </div>
        </x-slot:body>
    </x-modal-default>
</div>
