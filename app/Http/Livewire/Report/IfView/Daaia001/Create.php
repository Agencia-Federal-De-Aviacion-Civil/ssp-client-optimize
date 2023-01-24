<?php

namespace App\Http\Livewire\Report\IfView\Daaia001;

use App\Models\Catalogue\Municipal;
use App\Models\Catalogue\State;
use App\Models\Report\Daaia001;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $idReporter,$id_reporter,$state_id,$municipal_id,$daaia001;
    public $exactPlace,$city,$latitude,$longitude,$date,$time,$aeronauticalAuthority,$flight_phase,$indicate,$collision,
    $altitudeEvent,$maker,$modelReport,$serialNumber,$enrollment,$amateur,$maximumWeight,$accidentWeight,$nose,$datum,
    $noseI,$datumI,$aircraftCategory,$indicateI,$airworthiness,$indicateII,$numberSeats,$flightCrew,$cabinCrew,$passengerSeats,
    $undercarriage,$MaintenanceProgram,$specify,$lastInspection,$other,$lastInspectionDate,$gliderHours,$hoursLastInsp,$hoursTimeAccident,
    $ifrTeam,$collapseSystem,$fireSystem,$type,$eltInstalled,$eltActivated,$eltManufacturer,$eltModel,$eltSerial,$eltBattery,$engineType,
    $reciprocatingSystem,$makerPropeller,$modelPropeller,$pitchPropeller,$manufacturerEngine,$modelEngine,$powerEngine,$engineSerie1,
    $manufacturingDate1,$totalTime1,$lastIspection1,$lastRrepair1,$engineSerie2,$manufacturingDate2,$totalTime2,$lastIspection2,$lastRrepair2,
    $engineSerie3,$manufacturingDate3,$totalTime3,$lastIspection3,$lastRrepair3,$engineSerie4,$manufacturingDate4,$totalTime4,$lastIspection4,
    $lastRrepair4,$copyRevalidation;        
    public $states,$municipals;
    
    use WithFileUploads;
    public function rules()
    {
        return [
            'exactPlace' => 'required',
            'state_id' => 'required',
            'municipal_id' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'date' => 'required',
            'time' => 'required',
            'aeronauticalAuthority' => 'required',
            'flight_phase' => 'required',
            'indicate' => 'required',
            'collision' => 'required',
            'altitudeEvent' => 'required',
            'maker' => 'required',
            'modelReport' => 'required',
            'serialNumber' => 'required',
            'enrollment' => 'required',
            'amateur' => 'required',
            'maximumWeight' => 'required',
            'accidentWeight' => 'required',
            'nose' => 'required',
            'datum' => 'required',
            'noseI' => 'required',
            'datumI' => 'required',
            'aircraftCategory' => 'required',
            'indicateI' => 'required',
            'airworthiness' => 'required',
            'indicateII' => 'required',
            'numberSeats' => 'required',
            'flightCrew' => 'required',
            'cabinCrew' => 'required',
            'passengerSeats' => 'required',
            'undercarriage' => 'required',
            'MaintenanceProgram' => 'required',
            'specify' => 'required',
            'lastInspection' => 'required',
            'other' => 'required',
            'lastInspectionDate' => 'required',
            'gliderHours' => 'required',
            'hoursLastInsp' => 'required',
            'hoursTimeAccident' => 'required',
            'ifrTeam' => 'required',            
            'collapseSystem' => 'required',
            'fireSystem' => 'required',
            'type' => 'required',
            'eltInstalled' => 'required',
            'eltActivated' => 'required',
            'eltManufacturer' => 'required',
            'eltModel' => 'required',
            'eltSerial' => 'required',
            'eltBattery' => 'required',
            'engineType' => 'required',
            'reciprocatingSystem' => 'required',
            'makerPropeller' => 'required',
            'modelPropeller' => 'required',
            'pitchPropeller' => 'required',
            'manufacturerEngine' => 'required',
            'modelEngine' => 'required',
            'powerEngine' => 'required',
            'copyRevalidation'=> 'required|mimetypes:application/pdf|max:500',            
        ];
    }

    public function mount($idReporter){
    $this->idReporter = $idReporter;
    $this->states = State::all();
    $this->municipals = collect();
    
    }
    public function render()
    {
        return view('livewire.report.if-view.daaia001.create')
            ->extends('layouts.app')
            ->section('content');
    }
    public function updatedcopyRevalidation()
    {
        $this->validate(['copyRevalidation' => 'mimetypes:application/pdf|max:5000']);
    }    
    public function updatedStateId($state_id){
        $this->municipals = Municipal::where('state_id',$state_id)->get();
    }

    public function save(){
        // $this->validate();
        $this->daaia001 = Daaia001::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'exactPlace' => $this->exactPlace,
                'state_id' => $this->state_id,
                'municipal_id' => $this->municipal_id,
                'city' => $this->city,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'date' => $this->date,
                'time' => $this->time,
                'aeronauticalAuthority' => $this->aeronauticalAuthority,
                'flight_phase' => $this->flight_phase,
                'indicate' => $this->indicate,
                'collision' => $this->collision,
                'altitudeEvent' => $this->altitudeEvent,
                'maker' => $this->maker,
                'modelReport' => $this->modelReport,
                'serialNumber' => $this->serialNumber,
                'enrollment' => $this->enrollment,
                'amateur' => $this->amateur,
                'maximumWeight' => $this->maximumWeight,
                'accidentWeight' => $this->accidentWeight,
                'nose' => $this->nose,
                'datum' => $this->datum,
                'noseI' => $this->noseI,
                'datumI' => $this->datumI,
                'aircraftCategory' => $this->aircraftCategory,
                'indicateI' => $this->indicateI,
                'airworthiness' => $this->airworthiness,
                'indicateII' => $this->indicateII,
                'numberSeats' => $this->numberSeats,
                'flightCrew' => $this->flightCrew,
                'cabinCrew' => $this->cabinCrew,
                'passengerSeats' => $this->passengerSeats,
                'undercarriage' => $this->undercarriage,
                'MaintenanceProgram' => $this->MaintenanceProgram,
                'specify' => $this->specify,
                'lastInspection' => $this->lastInspection,
                'other' => $this->other,
                'lastInspectionDate' => $this->lastInspectionDate,
                'gliderHours' => $this->gliderHours,
                'hoursLastInsp' => $this->hoursLastInsp,
                'hoursTimeAccident' => $this->hoursTimeAccident,
                'ifrTeam' => $this->ifrTeam,
                'collapseSystem' => $this->collapseSystem,
                'fireSystem' => $this->fireSystem,
                'type' => $this->type,
                'eltInstalled' => $this->eltInstalled,
                'eltActivated' => $this->eltActivated,
                'eltManufacturer' => $this->eltManufacturer,
                'eltModel' => $this->eltModel,
                'eltSerial' => $this->eltSerial,
                'eltBattery' => $this->eltBattery,
                'engineType' => $this->engineType,
                'reciprocatingSystem' => $this->reciprocatingSystem,
                'makerPropeller' => $this->makerPropeller,
                'modelPropeller' => $this->modelPropeller,
                'pitchPropeller' => $this->pitchPropeller,
                'manufacturerEngine' => $this->manufacturerEngine,
                'modelEngine' => $this->modelEngine,
                'powerEngine' => $this->powerEngine,
                'engineSerie1' => $this->engineSerie1,
                'manufacturingDate1' => $this->manufacturingDate1,
                'totalTime1' => $this->totalTime1,
                'lastIspection1' => $this->lastIspection1,
                'lastRrepair1' => $this->lastRrepair1,
                'engineSerie2' => $this->engineSerie2,
                'manufacturingDate2' => $this->manufacturingDate2,
                'totalTime2' => $this->totalTime2,
                'lastIspection2' => $this->lastIspection2,
                'lastRrepair2' => $this->lastRrepair2,
                'engineSerie3' => $this->engineSerie3,
                'manufacturingDate3' => $this->manufacturingDate3,
                'totalTime3' => $this->totalTime3,
                'lastIspection3' => $this->lastIspection3,
                'lastRrepair3' => $this->lastRrepair3,
                'engineSerie4' => $this->engineSerie4,
                'manufacturingDate4' => $this->manufacturingDate4,
                'totalTime4' => $this->totalTime4,
                'lastIspection4' => $this->lastIspection4,
                'lastRrepair4' => $this->lastRrepair4,
                'copyRevalidation' => $this->copyRevalidation->store('documentos', 'public','Revalidacion'),
                ]
        );
    }
}
