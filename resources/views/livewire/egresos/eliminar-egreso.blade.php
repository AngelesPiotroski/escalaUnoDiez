<div>
    <x-modal-default title="Eliminar Egreso" name="Eliminar-Egreso">
        <x-slot:body>
            <div class="p-4">
                <div>
                    <h4 class="mb-4 text-lg font-semibold">¿Estás seguro de que deseas eliminar el egreso?</h4>
                    <div class="gap-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary" x-on:click="$dispatch('close-modal')">Cancelar</button>
                        <button type="submit" class="btn btn-primary" x-on:click="$wire.eliminarEgreso(); showModal = false">
                            Confirmar
                        </button>
                    </div>
                </div>
            </div>
        </x-slot:body>
    </x-modal-default>
</div>
