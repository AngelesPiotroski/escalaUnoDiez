<?php

namespace App\Livewire\Egresos;

use App\Livewire\ServicesComponent;
use App\Models\Egreso;
use App\Models\Obra;
use App\Models\Proveedor;
use App\Models\FormaPago;
use App\Models\Banco;
use App\Models\Servicio;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class CrearEgreso extends ServicesComponent
{
    public $cantidad, $concepto, $fecha;
    public $showModal = false;

    # select obras
    public $obras;
    public $obraSelected;

    # select proveedores
    public $proveedores;
    public $proveedorSelected;

    # select forma de pago
    public $formasPago;
    public $formaPagoSelected;

    # select bancos
    public $bancos;
    public $bancoSelected;

    # select servicios
    public $servicios;
    public $serviciosSeleccionados = [];

    protected $listeners = ['refreshCrearEgreso' => '$refresh'];

    public function mount()
    {
        $this->obras = Obra::all();
        $this->proveedores = Proveedor::all();
        $this->formasPago = FormaPago::all();
        $this->bancos = Banco::all();
        $this->servicios = Servicio::orderBy('nombre', 'asc')->get();
    }

    public function render()
    {
        $this->obras = Obra::all();
        $this->proveedores = Proveedor::all();
        $this->formasPago = FormaPago::all();
        $this->bancos = Banco::all();
        $this->servicios = Servicio::orderBy('nombre', 'asc')->get();

        return view('livewire.egresos.crear-egreso');
    }

    public function crearEgreso()
    {
        $this->validate([
            'cantidad' => 'required|numeric|min:1',
            'concepto' => 'required|string|max:255',
            'fecha' => 'required|date',
            'obraSelected' => 'required|exists:obra,id',
            'proveedorSelected' => 'required|exists:proveedores,id',
            'formaPagoSelected' => 'required|exists:formapago,id',
            'bancoSelected' => 'required|exists:banco,id',
            'serviciosSeleccionados' => 'required|array',
            'serviciosSeleccionados.*' => 'exists:servicio,id', // Validación de que cada ID existe en la tabla servicios
        ]);

        try {
            $user = Auth::user();
            Egreso::crearEgreso(
                $this->cantidad,
                $this->obraSelected,
                $this->proveedorSelected,
                $this->formaPagoSelected,
                $this->bancoSelected,
                $this->serviciosSeleccionados,
                $this->concepto,
                $this->fecha,
                $user->id
            );
            //Enviar evento para refrescar la tabla
            $this->dispatch('refreshEgresosTable')->to(EgresosTable::class);
            //Limpiar los campos
            $this->limpiar();

            //Mostrar mensaje de éxito
            $this->alertService->success($this, 'Egreso creado con éxito');

        } catch (\Exception $th) {
            $this->alertService->error($this, 'Error al crear el egreso');
            $this->loggerService->logError($th->getMessage() . '\nTraza:\n' . $th->getTraceAsString());
        }
    }

    public function limpiar()
    {
        $this->reset('cantidad');
        $this->reset('concepto');
        $this->reset('fecha');
        $this->reset('obraSelected');
        $this->reset('proveedorSelected');
        $this->reset('formaPagoSelected');
        $this->reset('bancoSelected');
        $this->reset('serviciosSeleccionados');
        $this->dispatch('clearSelect2');
        $this->closeModal();
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }


}
