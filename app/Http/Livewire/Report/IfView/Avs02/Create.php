<?php

namespace App\Http\Livewire\Report\IfView\Avs02;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Report\Afac02;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;
use PDF;
class Create extends Component
{
    use Actions;
    public $Afac02,$id_reporter,$idReporter;
    public $date,$hour,$aerodromeName,$observerName,$dependence,$company,$birdLocation,$temperature,$wind,$birdType,$birdSize,$birdNumber,
    $birdColor,$strikingFeature,$birdsObservation,$probableCauses,$describeType,$otherSigns,$describeThem;

    use WithFileUploads;
    public function rules()
    {
        return [
            'date' => 'required',
            'hour' => 'required',
            'aerodromeName' => 'required',
            'observerName' => 'required',
            'dependence' => 'required',
            'company' => 'required',
            'birdLocation' => 'required',
            'temperature' => 'required',
            'wind' => 'required',
            'birdType' => 'required',
            'birdSize' => 'required',
            'birdNumber' => 'required',
            'birdColor' => 'required',
            'strikingFeature' => 'required',
            'birdsObservation' => 'required',
            'probableCauses' => 'required',
            'describeType' => 'required',
            'otherSigns' => 'required',
            'describeThem' => 'required',            
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }    
    public function mount($idReporter){
        $this->idReporter = $idReporter;
    }

    public function render()
    {
        return view('livewire.report.if-view.Avs02.create')
            ->extends('layouts.app')
            ->section('content');
    }
    public function save(){

        $this->validate();
        // dd($this->directionOwner);
        $this->Afac02 = Afac02::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'date' => $this->date,
                'hour' => $this->hour,
                'aerodromeName' => $this->aerodromeName,
                'observerName' => $this->observerName,
                'dependence' => $this->dependence,
                'company' => $this->company,
                'birdLocation' => $this->birdLocation,
                'temperature' => $this->temperature,
                'wind' => $this->wind,
                'birdType' => $this->birdType,
                'birdSize' => $this->birdSize,
                'birdNumber' => $this->birdNumber,
                'birdColor' => $this->birdColor,
                'strikingFeature' => $this->strikingFeature,
                'birdsObservation' => $this->birdsObservation,
                'probableCauses' => $this->probableCauses,
                'describeType' => $this->describeType,
                'otherSigns' => $this->otherSigns,
                'describeThem' => $this->describeThem,
                                
                ]
        );
    } 
    public function messages()
    {
        return [

            'date.required' => 'Campo obligatorio',
            'hour.required' => 'Campo obligatorio',
            'aerodromeName.required' => 'Campo obligatorio',
            'observerName.required' => 'Campo obligatorio',
            'dependence.required' => 'Campo obligatorio',
            'company.required' => 'Campo obligatorio',
            'birdLocation.required' => 'Campo obligatorio',
            'temperature.required' => 'Campo obligatorio',
            'wind.required' => 'Campo obligatorio',
            'birdType.required' => 'Campo obligatorio',
            'birdSize.required' => 'Campo obligatorio',
            'birdNumber.required' => 'Campo obligatorio',
            'birdColor.required' => 'Campo obligatorio',
            'strikingFeature.required' => 'Campo obligatorio',
            'birdsObservation.required' => 'Campo obligatorio',
            'probableCauses.required' => 'Campo obligatorio',
            'describeType.required' => 'Campo obligatorio',
            'otherSigns.required' => 'Campo obligatorio',               
            'describeThem.required' => 'Campo obligatorio',  
        ];
    }
}
