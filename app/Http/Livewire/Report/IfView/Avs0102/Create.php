<?php

namespace App\Http\Livewire\Report\IfView\Avs0102;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Report\Afac0102;
use Livewire\Component;
use WireUi\Traits\Actions;
use PDF;
class Create extends Component
{
    use Actions;
    public $idReporter,$afac0102id,$id_reporter;
    public $brands,$models,$modelsengine;
    public $exploitative,$aircraftbrand_id,$aircraftmodel_id,$aircraftRegistration,$enginebrand_id,$enginemodel_id,$date,$hour,$localTime,$aerodromeName,$trackUsed,
    $positionRoute,$height,$indicatedSpeed,$flightPhases,$radome,$propeller,$windshield,$wingEngine,$bowExcept,$fuselage,$engine1,$undercarriage,$hitOdamada2,$line,
    $struckHurted3,$lights,$hitOdamada4,$otherSpecify,$consequenceFlight,$specify,$skyConditions,$precipitation,$birdSpecies,$hitOdamaged1,$hitOdamaged2,$hitOdamaged3,
    $hitOdamaged4,$birdSize,$pilotDanger,$observation;
    
    public function mount($idReporter)
    {
        $this->idReporter = $idReporter;
        $this->brands = Brand::all();
        $this->models = collect();
        $this->modelsengine = collect();
    }    
    public function rules()
    {
        return [        
            'exploitative' => 'required',
            'aircraftbrand_id' => 'required',
            'aircraftmodel_id' => 'required',
            'aircraftRegistration' => 'required',
            'enginebrand_id' => 'required',
            'enginemodel_id' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'localTime' => 'required',
            'aerodromeName' => 'required',
            'trackUsed' => 'required',
            'positionRoute' => 'required',
            'height' => 'required',
            'indicatedSpeed' => 'required',
            'flightPhases' => 'required',
            'radome' => 'required',
            'propeller' => 'required',
            'windshield' => 'required',
            'wingEngine' => 'required',
            'bowExcept' => 'required',
            'fuselage' => 'required',
            'engine1' => 'required',
            'undercarriage' => 'required',
            'hitOdamada2' => 'required',
            'line' => 'required',
            'struckHurted3' => 'required',
            'lights' => 'required',
            'hitOdamada4' => 'required',
            'otherSpecify' => 'required',
            'consequenceFlight' => 'required',
            'skyConditions' => 'required',
            'precipitation' => 'required',
            'birdSpecies' => 'required',
            'hitOdamaged1' => 'required',
            'hitOdamaged2' => 'required',
            'hitOdamaged3' => 'required',
            'hitOdamaged4' => 'required',
            'birdSize' => 'required',
            'pilotDanger' => 'required',
            'observation' => 'required',
        ];
    }
    public function render()
    {
        return view('livewire.report.if-view.Avs0102.create')
            ->extends('layouts.app')
            ->section('content');
    }    
    public function updatedAircraftbrandId($aircraftbrand_id)
    {
        $this->models =  aModel::where('brand_id', $aircraftbrand_id)->get();
    }
    public function updatedEnginebrandId($enginebrand_id)
    {
        $this->modelsengine =  aModel::where('brand_id', $enginebrand_id)->get();
    }
           
    public function save(){
        $this->validate();
        $this->afac0102id = Afac0102::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'exploitative' => $this->exploitative,
                'aircraftbrand_id' => $this->aircraftbrand_id,
                'aircraftmodel_id' => $this->aircraftmodel_id,
                'aircraftRegistration' => $this->aircraftRegistration,
                'enginebrand_id' => $this->enginebrand_id,
                'enginemodel_id' => $this->enginemodel_id,
                'date' => $this->date,
                'hour' => $this->hour,
                'localTime' => $this->localTime,
                'aerodromeName' => $this->aerodromeName,
                'trackUsed' => $this->trackUsed,
                'positionRoute' => $this->positionRoute,
                'height' => $this->height,
                'indicatedSpeed' => $this->indicatedSpeed,
                'flightPhases' => $this->flightPhases,
                'radome' => $this->radome,
                'propeller' => $this->propeller,
                'windshield' => $this->windshield,
                'wingEngine' => $this->wingEngine,
                'bowExcept' => $this->bowExcept,
                'fuselage' => $this->fuselage,
                'engine1' => $this->engine1,
                'undercarriage' => $this->undercarriage,
                'hitOdamada2' => $this->hitOdamada2,
                'line' => $this->line,
                'struckHurted3' => $this->struckHurted3,
                'lights' => $this->lights,
                'hitOdamada4' => $this->hitOdamada4,
                'otherSpecify' => $this->otherSpecify,
                'consequenceFlight' => $this->consequenceFlight,
                'specify' => $this->specify,
                'skyConditions' => $this->skyConditions,
                'precipitation' => $this->precipitation,
                'birdSpecies' => $this->birdSpecies,
                'hitOdamaged1' => $this->hitOdamaged1,
                'hitOdamaged2' => $this->hitOdamaged2,
                'hitOdamaged3' => $this->hitOdamaged3,
                'hitOdamaged4' => $this->hitOdamaged4,
                'birdSize' => $this->birdSize,
                'pilotDanger' => $this->pilotDanger,
                'observation' => $this->observation,                
            ]);
    }
    public function messages()
    {
        return [           
            'exploitative.required' => 'Campo obligatorio',
            'aircraftbrand_id.required' => 'Campo obligatorio',
            'aircraftmodel_id.required' => 'Campo obligatorio',
            'aircraftRegistration.required' => 'Campo obligatorio',
            'enginebrand_id.required' => 'Campo obligatorio',
            'enginemodel_id.required' => 'Campo obligatorio',
            'date.required' => 'Campo obligatorio',
            'hour.required' => 'Campo obligatorio',
            'localTime.required' => 'Campo obligatorio',
            'aerodromeName.required' => 'Campo obligatorio',
            'trackUsed.required' => 'Campo obligatorio',
            'positionRoute.required' => 'Campo obligatorio',
            'height.required' => 'Campo obligatorio',
            'indicatedSpeed.required' => 'Campo obligatorio',
            'flightPhases.required' => 'Campo obligatorio',
            'radome.required' => 'Campo obligatorio',
            'propeller.required' => 'Campo obligatorio',
            'windshield.required' => 'Campo obligatorio',
            'wingEngine.required' => 'Campo obligatorio',
            'bowExcept.required' => 'Campo obligatorio',
            'fuselage.required' => 'Campo obligatorio',
            'engine1.required' => 'Campo obligatorio',
            'undercarriage.required' => 'Campo obligatorio',
            'hitOdamada2.required' => 'Campo obligatorio',
            'line.required' => 'Campo obligatorio',
            'struckHurted3.required' => 'Campo obligatorio',
            'lights.required' => 'Campo obligatorio',
            'hitOdamada4.required' => 'Campo obligatorio',
            'otherSpecify.required' => 'Campo obligatorio',
            'consequenceFlight.required' => 'Campo obligatorio',
            'skyConditions.required' => 'Campo obligatorio',
            'precipitation.required' => 'Campo obligatorio',
            'birdSpecies.required' => 'Campo obligatorio',
            'hitOdamaged1.required' => 'Campo obligatorio',
            'hitOdamaged2.required' => 'Campo obligatorio',
            'hitOdamaged3.required' => 'Campo obligatorio',
            'hitOdamaged4.required' => 'Campo obligatorio',
            'birdSize.required' => 'Campo obligatorio',
            'pilotDanger.required' => 'Campo obligatorio',
            'observation.required' => 'Campo obligatorio',
        ];
    }    
    
}
