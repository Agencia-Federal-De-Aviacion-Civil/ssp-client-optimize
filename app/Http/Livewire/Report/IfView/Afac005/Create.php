<?php

namespace App\Http\Livewire\Report\IfView\Afac005;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Report\Afac005;
use Livewire\Component;
use WireUi\Traits\Actions;
use PDF;
class Create extends Component
{
    use Actions;    
    public $afac005id,$id_reporter,$idReporter,$dateLocal,$timeLocal,$airportIdentifier,$deviationType,$vehicle,$specify,$economicNumber,$plates,$vehicleAccompanied,$name1,$employee1,$specify1,$certifiedAirport,$type,$deviation,
    $airfieldProvides,$completeDriver,$when,$trainingProgram,$knowledgeExperience,$specify2,$investigationFound,$specify3,$comunication,$specify4,$name2,$employee2,$specify5,$deviationDetected,$specify6,$visibleTower,
    $specify7,$avoidCollision,$horizontal,$vertical,$weatherConditions,$specify8,$prevailingVisibility,$temperatureSpecify,$roofSpecify,$movementArea,$specify9,$movementFeatured,$specify10,$clearanceCollision,$specify11,
    $lossSeparation,$attached,$specify12,$takenPlanned,$specify13,$name3,$firm,$date;

    public function mount($idReporter)
    {
        $this->idReporter = $idReporter;
    }
    public function rules()
    {
        return [

            'dateLocal' => 'required',
            'timeLocal' => 'required',
            'airportIdentifier' => 'required',
            'deviationType' => 'required',
            'vehicle' => 'required',
            // 'specify' => 'required',
            'economicNumber' => 'required',
            'plates' => 'required',
            'vehicleAccompanied' => 'required',
            'name1' => 'required',
            'employee1' => 'required',
            // 'specify1' => 'required',
            'certifiedAirport' => 'required',
            // 'type' => 'required',
            'deviation' => 'required',
            'airfieldProvides' => 'required',
            'completeDriver' => 'required',
            // 'when' => 'required',
            'trainingProgram' => 'required',
            'knowledgeExperience' => 'required',
            // 'specify2' => 'required',
            'investigationFound' => 'required',
            // 'specify3' => 'required',
            'comunication' => 'required',
            // 'specify4' => 'required',
            'name2' => 'required',
            'employee2' => 'required',
            // 'specify5' => 'required',
            'deviationDetected' => 'required',
            // 'specify6' => 'required',
            'visibleTower' => 'required',
            // 'specify7' => 'required',
            'avoidCollision' => 'required',
            'horizontal' => 'required',
            'vertical' => 'required',
            'weatherConditions' => 'required',
            // 'specify8' => 'required',
            'prevailingVisibility' => 'required',
            'temperatureSpecify' => 'required',
            'roofSpecify' => 'required',
            'movementArea' => 'required',
            // 'specify9' => 'required',
            'movementFeatured' => 'required',
            // 'specify10' => 'required',
            'clearanceCollision' => 'required',
            // 'specify11' => 'required',
            'lossSeparation' => 'required',
            'attached' => 'required',
            // 'specify12' => 'required',
            'takenPlanned' => 'required',
            // 'specify13' => 'required',
            'name3' => 'required',
            'firm' => 'required',
            'date' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.report.if-view.Afac005.create')
            ->extends('layouts.app')
            ->section('content');
    }

    public function save(){
        $this->validate();

        $this->afac005id = Afac005::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'dateLocal' => $this->dateLocal ,
                'timeLocal' => $this->timeLocal ,
                'airportIdentifier' => $this->airportIdentifier,
                'deviationType' => $this->deviationType,
                'vehicle' => $this->vehicle,
                'specify' => $this->specify,
                'economicNumber' => $this->economicNumber,
                'plates' => $this->plates,
                'vehicleAccompanied' => $this->vehicleAccompanied,
                'name1' => $this->name1,
                'employee1' => $this->employee1,
                'specify1' => $this->specify1,
                'certifiedAirport' => $this->certifiedAirport,
                'type' => $this->type,
                'deviation' => $this->deviation,
                'airfieldProvides' => $this->airfieldProvides,
                'completeDriver' => $this->completeDriver,
                'when' => $this->when,
                'trainingProgram' => $this->trainingProgram,
                'knowledgeExperience' => $this->knowledgeExperience,
                'specify2' => $this->specify2,
                'investigationFound' => $this->investigationFound,
                'specify3' => $this->specify3,
                'comunication' => $this->comunication,
                'specify4' => $this->specify4,
                'name2' => $this->name2,
                'employee2' => $this->employee2,
                'specify5' => $this->specify5,
                'deviationDetected' => $this->deviationDetected,
                'specify6' => $this->specify6,
                'visibleTower' => $this->visibleTower,
                'specify7' => $this->specify7,
                'avoidCollision' => $this->avoidCollision,
                'horizontal' => $this->horizontal,
                'vertical' => $this->vertical,
                'weatherConditions' => $this->weatherConditions,
                'specify8' => $this->specify8,
                'prevailingVisibility' => $this->prevailingVisibility,
                'temperatureSpecify' => $this->temperatureSpecify,
                'roofSpecify' => $this->roofSpecify,
                'movementArea' => $this->movementArea,
                'specify9' => $this->specify9,
                'movementFeatured' => $this->movementFeatured,
                'specify10' => $this->specify10,
                'clearanceCollision' => $this->clearanceCollision,
                'specify11' => $this->specify11,
                'lossSeparation' => $this->lossSeparation,
                'attached' => $this->attached,
                'specify12' => $this->specify12,
                'takenPlanned' => $this->takenPlanned,
                'specify13' => $this->specify13,
                'name3' => $this->name3,
                'firm' => $this->firm,
                'date' => $this->date,
    
                ]
        );
        $this->takeClass();        
    }
    public function takeClass()
    {
        $this->dialog()->confirm([
            'title'       => 'REPORTE GENERADO',
            'description' => '¿DESEAS IMPRIMIR REPORTE?',
            'icon'        => 'success',
            'accept'      => [
                'label'  => 'IMPRIMIR',
                'method' => 'print',
            ],
            'reject' => [
                'label'  => 'SALIR',
                // 'method' => 'cleanInput',
            ],
        ]);
    }
    public function print()
    {
        //$id = $this->afac001aid->id;
        return redirect()->route('afac005-pdf');
    }
    public function PdfAfac005()
    {

        $pdf = PDF::loadView('report.ifView.afac005.pdf.afac005-pdf');
        return $pdf->download('reporte_No_'.'.pdf');
    }
    public function messages()
    {
        return [           
            'dateLocal' => 'Campo obligatorio',
            'timeLocal' => 'Campo obligatorio',
            'airportIdentifier' => 'Campo obligatorio',
            'deviationType' => 'Campo obligatorio',
            'vehicle' => 'Campo obligatorio',
            // 'specify' => 'Campo obligatorio',
            'economicNumber' => 'Campo obligatorio',
            'plates' => 'Campo obligatorio',
            'vehicleAccompanied' => 'Campo obligatorio',
            'name1' => 'Campo obligatorio',
            'employee1' => 'Campo obligatorio',
            // 'specify1' => 'Campo obligatorio',
            'certifiedAirport' => 'Campo obligatorio',
            // 'type' => 'Campo obligatorio',
            'deviation' => 'Campo obligatorio',
            'airfieldProvides' => 'Campo obligatorio',
            'completeDriver' => 'Campo obligatorio',
            // 'when' => 'Campo obligatorio',
            'trainingProgram' => 'Campo obligatorio',
            'knowledgeExperience' => 'Campo obligatorio',
            // 'specify2' => 'Campo obligatorio',
            'investigationFound' => 'Campo obligatorio',
            // 'specify3' => 'Campo obligatorio',
            'comunication' => 'Campo obligatorio',
            // 'specify4' => 'Campo obligatorio',
            'name2' => 'Campo obligatorio',
            'employee2' => 'Campo obligatorio',
            // 'specify5' => 'Campo obligatorio',
            'deviationDetected' => 'Campo obligatorio',
            // 'specify6' => 'Campo obligatorio',
            'visibleTower' => 'Campo obligatorio',
            // 'specify7' => 'Campo obligatorio',
            'avoidCollision' => 'Campo obligatorio',
            'horizontal' => 'Campo obligatorio',
            'vertical' => 'Campo obligatorio',
            'weatherConditions' => 'Campo obligatorio',
            // 'specify8' => 'Campo obligatorio',
            'prevailingVisibility' => 'Campo obligatorio',
            'temperatureSpecify' => 'Campo obligatorio',
            'roofSpecify' => 'Campo obligatorio',
            'movementArea' => 'Campo obligatorio',
            // 'specify9' => 'Campo obligatorio',
            'movementFeatured' => 'Campo obligatorio',
            // 'specify10' => 'Campo obligatorio',
            'clearanceCollision' => 'Campo obligatorio',
            // 'specify11' => 'Campo obligatorio',
            'lossSeparation' => 'Campo obligatorio',
            'attached' => 'Campo obligatorio',
            // 'specify12' => 'Campo obligatorio',
            'takenPlanned' => 'Campo obligatorio',
            // 'specify13' => 'Campo obligatorio',
            'name3' => 'Campo obligatorio',
            'firm' => 'Campo obligatorio',
            'date' => 'Campo obligatorio',
        ];
    }
}
