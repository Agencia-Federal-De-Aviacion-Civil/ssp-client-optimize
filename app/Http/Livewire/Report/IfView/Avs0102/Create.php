<?php

namespace App\Http\Livewire\Report\IfView\Avs0102;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use Livewire\Component;
use WireUi\Traits\Actions;
use PDF;
class Create extends Component
{
    use Actions;
    public $idReporter;
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
 
 
 
    }

   
}
