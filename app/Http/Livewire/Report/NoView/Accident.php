<?php

namespace App\Http\Livewire\Report\NoView;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Event;
use App\Models\Catalogue\License;
use App\Models\Catalogue\LicenseType;
use App\Models\Catalogue\Municipal;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Catalogue\State;
use App\Models\Catalogue\SubEvent;
use App\Models\Catalogue\Type;
use App\Models\Report\NoReport\ReportAccident;
use Livewire\Component;

class Accident extends Component
{
    public $tipo, $marca, $modelo, $estado, $municipio, $boperacion, $origen_vuelo, $destino_vuelo,
        $tipoevento, $classlicenspilot, $licensecopilot, $class_pilot, $sub_menu_event;
    public $users_reporter_id, $event, $id_accidente;
    public $tipos, $brands = [], $amodels = [], $states, $municipals = [],
        $boperations = [], $nationalities = [], $forigins = [], $fdestinations = [], $events = [],
        $licenses = [], $licensetypes = [], $licensetypesCopilot = [], $subevents = [];
    public $type_id, $brand_id, $amodel_id, $state_id, $municipal_id, $boperation_id, $nationalitie, $forigin_id,
        $fdestination_id, $event_id, $license_id, $license_type_id, $sub_event_id, $other = null, $involved, $place, $dateStart, $hourStart,
        $licensePlate, $serialNumber, $owner, $aircraftDamage, $nameCaptan, $expire, $injuries, $namePilot,
        $national_pilot, $license_id_copilot, $license_type_id_copilot, $injuriesPilot, $injuriesPassengers, $commodity, $description,
        $observations, $consequence, $proposals, $frequent, $gravity;
    public $nationalcapitan, $national_capitan, $national_copilot, $nationalcopilot;
    public function mount()
    {
        $this->reset();
        $this->licenses = License::all();
        $this->events = Event::all();
        $this->forigins = Place::all();
        $this->fdestinations = Place::all();
        $this->nationalities = Nacionality::all();
        $this->boperations = BaseOperation::all();
        $this->states = State::all();
        $this->tipos = Type::all();
        $this->brands = collect();
        $this->licensetypes = collect();
        $this->subevents = collect();
    }
    protected $rules = [
        // 'users_reporter_id' => 'required',
        'event' => 'required',
        'event_id' => 'required',
        'sub_event_id' => 'required',
        'involved' => 'required',
        'place' => 'required',
        'state_id' => 'required',
        'municipal_id' => 'required',
        'dateStart' => 'required',
        'hourStart' => 'required',
        'type_id' => 'required',
        'brand_id' => 'required',
        'amodel_id' => 'required',
        'licensePlate' => 'required',
        'serialNumber' => 'required',
        'owner' => 'required',
        'boperation_id' => 'required',
        'aircraftDamage' => 'required',
        'nameCaptan' => 'required',
        'national_capitan' => 'required',
        'license_id' => 'required',
        'license_type_id' => 'required',
        'expire' => 'required',
        'injuries' => 'required',
        'namePilot' => 'required',
        'national_pilot' => 'required',
        'license_id_copilot' => 'required',
        'license_type_id_copilot' => 'required',
        'injuriesPilot' => 'required',
        'injuriesPassengers' => 'required',
        // 'forigin_id' => 'required',
        // 'fdestination_id' => 'required',
        'commodity' => 'required',
        'description' => 'required',
        'observations' => 'required',
        'consequence' => 'required',
        'frequent' => 'required'
    ];
    public function render()
    {
        return view('livewire.report.no-view.accident')
            ->extends('layouts.app')
            ->section('content');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updatedtipo($tipo_id)
    {
        $this->brands =  Brand::where('type_id', $tipo_id)->get();
    }
    public function updatedmarca($marca_id)
    {
        $this->amodels = aModel::where('brand_id', $marca_id)->get();
    }
    public function updatedtipoevento($subevento_id)
    {
        $this->subevents = SubEvent::where('event_id', $subevento_id)->get();
    }
    public function updatedclasslicenspilot($licencia_id)
    {
        $this->licensetypes = LicenseType::where('license_id', $licencia_id)->get();
    }

    public function updatedlicensecopilot($licencia_id_copilot)
    {
        $this->licensetypesCopilot = LicenseType::where('license_id', $licencia_id_copilot)->get();
    }

    public function updatedestado($estado_id)
    {
        $this->municipals = Municipal::where('state_id', $estado_id)->get();
    }
    public function limpiarCampos()
    {
        $this->users_reporter_id = '';
        $this->event = '';
        $this->event_id = ''; //DEJANDOLOS VACIOS LOS LIMPIARA AUTOMATICAMENTE

    }
    public function save()
    {
        $validation = $this->validate();
        if (!empty($this->other)) {
            $otherNull = $this->other;
        } else {
            $otherNull = 'N/A';
        }
        ReportAccident::updateOrCreate(
            ['id' => $this->id_accidente],
            [
                'users_reporter_id' => $this->users_reporter_id,
                'type_id' => $this->type_id,
                'event' => $this->event,
                'brand_id' => $this->brand_id,
                'amodel_id' => $this->amodel_id,
                'state_id' => $this->state_id,
                'municipal_id' => $this->municipal_id,
                'base_operation_id' => $this->boperation_id,
                'national_capitan' => $this->national_capitan,
                'forigin_id' => $this->forigin_id,
                'fdestination_id' => $this->fdestination_id,
                'license_id' => $this->license_id,
                'license_type_id' => $this->license_type_id,
                'event_id' => $this->event_id,
                'sub_event_id' => $this->sub_event_id,
                'other' => $otherNull,
                'involved' => $this->involved,
                'place' => $this->place,
                'dateStart' => $this->dateStart,
                'hourStart' => $this->hourStart,
                'licensePlate' => $this->licensePlate,
                'serialNumber' => $this->serialNumber,
                'owner' => $this->owner,
                'aircraftDamage' => $this->aircraftDamage,
                'nameCaptan' => $this->nameCaptan,
                'injuries' => $this->injuries,
                'expire' => $this->expire,
                'namePilot' => $this->namePilot,
                'national_pilot' => $this->national_pilot,
                'license_id_copilot' => $this->license_id_copilot,
                'license_type_id_copilot' => $this->license_type_id_copilot,
                'injuriesPilot' => $this->injuriesPilot,
                'injuriesPassengers' => $this->injuriesPassengers,
                'commodity' => $this->commodity,
                'description' => $this->description,
                'observations' => $this->observations,
                'consequence' => $this->consequence,
                'proposals' => $this->proposals,
                'frequent' => $this->frequent,
                'gravity' => $this->gravity

            ],
            $validation
        );
        session()->flash(
            'success',
            $this->id_accidente ? '¡Actualización éxitosa!' : 'Regla añadida con éxito.'
        );
        $this->limpiarCampos();
        // return redirect()->route('endAccident');
        // return redirect()->to('/end-reports');
    }
    public function messages()
    {
        return [
            'place.required' => 'Campo obligatorio',
            'state_id.required' => 'Campo obligatorio',
            'municipal_id.required' => 'Campo obligatorio',
            'dateStart.required' => 'Campo obligatorio',
            'hourStart.required' => 'Campo obligatorio',
            'type_id.required' => 'Campo obligatorio',
            'brand_id.required' => 'Campo obligatorio',
            'amodel_id.required' => 'Campo obligatorio',
            'licensePlate.required' => 'Campo obligatorio',
            'event.required' => 'Campo obligatorio',
            'event_id.required' => 'Campo obligatorio',
            'sub_event_id.required' => 'Campo obligatorio',
            'serialNumber.required' => 'Campo obligatorio',
            'owner.required' => 'Campo obligatorio',
            'boperation_id.required' => 'Campo obligatorio',
            'aircraftDamage.required' => 'Campo obligatorio',
            'nameCaptan.required' => 'Campo obligatorio',
            'national_capitan.required' => 'Campo obligatorio',
            'license_id.required' => 'Campo obligatorio',
            'license_type_id.required' => 'Campo obligatorio',
            'expire.required' => 'Campo obligatorio',
            'injuries.required' => 'Campo obligatorio',
            'namePilot.required' => 'Campo obligatorio',
            'national_pilot.required'=>'Campo obligatorio',
            'license_id_copilot.required'=>'Campo obligatorio',
            'license_type_id_copilot.required'=>'Campo obligatorio',
            'injuriesPilot.required'=>'Campo obligatorio',
            'injuriesPassengers.required'=>'Campo obligatorio',
            'forigin_id.required'=>'Campo obligatorio',
            'fdestination_id.required'=>'Campo obligatorio',
            'commodity.required'=>'Campo obligatorio',
            'description.required'=>'Campo obligatorio',
            'observations.required'=>'Campo obligatorio',
            'consequence.required'=>'Campo obligatorio',
            'frequent.required'=>'Campo obligatorio',
            'involved.required' => 'Campo obligatorio',
        ];
    }
}
