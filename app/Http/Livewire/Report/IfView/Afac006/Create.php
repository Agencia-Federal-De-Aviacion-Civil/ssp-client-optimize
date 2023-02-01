<?php

namespace App\Http\Livewire\Report\IfView\Afac006;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Report\Afac006;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use PDF;
class Create extends Component
{
    use Actions;
    use WithFileUploads;
    public $Afac006id,$id_reporter,$idReporter;
    public $folioNumber,$cityTown,$dateUTC,$timeUTC,$localTime,$region,$identificationServices,$airtrafficControl,$incidentReclassified,
    $specify,$incidentNumber,$newReclassification,$reasonReclassification,$name,$firm,$date,$fileMinutes;

    public function mount($idReporter)
    {
        $this->idReporter = $idReporter;
    }
     public function rules()
    {
        return [        
            'folioNumber' => 'required',
            'cityTown' => 'required',
            'dateUTC' => 'required',
            'timeUTC' => 'required',
            'localTime' => 'required',
            'region' => 'required',
            'identificationServices' => 'required',
            'airtrafficControl' => 'required',
            'incidentReclassified' => 'required',
            // 'specify' => 'required',
            'incidentNumber' => 'required',
            'newReclassification' => 'required',
            'reasonReclassification' => 'required',
            'name' => 'required',
            'firm' => 'required',
            'date' => 'required',
            'fileMinutes'=> 'required|mimetypes:application/pdf|max:500',            
        ];
    }

    public function render()
    {
        return view('livewire.report.if-view.Afac006.create')
            ->extends('layouts.app')
            ->section('content');
    }
    public function updatedfileMinutes(){
        $this->validate(['fileMinutes' => 'mimetypes:application/pdf|max:5000']);        
    }    
    public function save(){
        $this->validate();
        $this->Afac006id = Afac006::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'folioNumber' => $this->folioNumber,
                'cityTown' => $this->cityTown,
                'dateUTC' => $this->dateUTC,
                'timeUTC' => $this->timeUTC,
                'localTime' => $this->localTime,
                'region' => $this->region,
                'identificationServices' => $this->identificationServices,
                'airtrafficControl' => $this->airtrafficControl,
                'incidentReclassified' => $this->incidentReclassified,
                'specify' => $this->specify,
                'incidentNumber' => $this->incidentNumber,
                'newReclassification' => $this->newReclassification,
                'reasonReclassification' => $this->reasonReclassification,
                'name' => $this->name,
                'firm' => $this->firm,
                'date' => $this->date,
                'fileMinutes' => $this->fileMinutes->store('documentos', 'public','Minutas'),
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
        // return redirect()->route('afac006-pdf');
    }
    public function PdfAfac005()
    {

        // $pdf = PDF::loadView('report.ifView.afac006.pdf.afac005-pdf');
        // return $pdf->download('reporte_No_'.'.pdf');
    }

    public function messages()
    {
        return [           
            'folioNumber.required' => 'Campo obligatorio',
            'cityTown.required' => 'Campo obligatorio',
            'dateUTC.required' => 'Campo obligatorio',
            'timeUTC.required' => 'Campo obligatorio',
            'localTime.required' => 'Campo obligatorio',
            'region.required' => 'Campo obligatorio',
            'identificationServices.required' => 'Campo obligatorio',
            'airtrafficControl.required' => 'Campo obligatorio',
            'incidentReclassified.required' => 'Campo obligatorio',
            // 'specify.required' => 'Campo obligatorio',
            'incidentNumber.required' => 'Campo obligatorio',
            'newReclassification.required' => 'Campo obligatorio',
            'reasonReclassification.required' => 'Campo obligatorio',
            'name.required' => 'Campo obligatorio',
            'firm.required' => 'Campo obligatorio',
            'date.required' => 'Campo obligatorio',
        ];
    }
   
}
