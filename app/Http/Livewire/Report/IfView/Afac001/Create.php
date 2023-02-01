<?php

namespace App\Http\Livewire\Report\IfView\Afac001;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Report\Afac001;
use App\Models\User\GeneralUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use PDF;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;
    public $afac001id, $idReporter, $id_reporter, $brands, $operationsBase, $nacionalities, $placesDestinations, $models;
    public $dateEvent, $hourEvent, $brand_id, $amodel_id, $serialNumber, $licensePlate, $maximumWeight, $airworthinessCertificate, $validity, $owner, $place, $latitude, $longitude,
        $elevation, $crashSite, $aircraftDamage, $place_origen_id, $place_destination_id, $serviceOfDestiny, $dangerousGoods, $type, $base_operation_id, $peopleOnBoard,
        $fatalInjuries, $seriousInjuries, $otherFatalInjuries, $nationality_passengers_id, $commanderName, $nationality_commander_id, $licenseNumber, $category, $validityLicense,
        $oficialName, $nationality_oficial_id, $licenseNumberOficial, $categoryOficial, $validityLicenseOficial, $copilotInjuries, $emergencyTeam, $searchWork, $descriptionFacts,
        $investigatorCharge, $telephone, $email;
    public function mount($idReporter)
    {
        $this->idReporter = $idReporter;
        $this->brands = Brand::all();
        $this->operationsBase = BaseOperation::all();
        $this->nacionalities = Nacionality::all();
        $this->placesDestinations = Place::all();
        $this->models = collect();
    }
    public function rules()
    {
        return [
            'dateEvent' => 'required',
            'hourEvent' => 'required',
            'brand_id' => 'required',
            'amodel_id' => 'required',
            'serialNumber' => 'required',
            'licensePlate' => 'required',
            'maximumWeight' => 'required',
            'airworthinessCertificate' => 'required',
            'validity' => 'required',
            'owner' => 'required',
            'place' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'elevation' => 'required',
            'crashSite' => 'required',
            'aircraftDamage' => 'required',
            'place_origen_id' => 'required',
            'place_destination_id' => 'required',
            'serviceOfDestiny' => 'required',
            'dangerousGoods' => 'required',
            'type' => 'required',
            'base_operation_id' => 'required',
            'peopleOnBoard' => 'required',
            'fatalInjuries' => 'required',
            'seriousInjuries' => 'required',
            'otherFatalInjuries' => 'required',
            'nationality_passengers_id' => 'required',
            'commanderName' => 'required',
            'nationality_commander_id' => 'required',
            'licenseNumber' => 'required',
            'category' => 'required',
            'validityLicense' => 'required',
            'oficialName' => 'required',
            'nationality_oficial_id' => 'required',
            'licenseNumberOficial' => 'required',
            'categoryOficial' => 'required',
            'validityLicenseOficial' => 'required',
            'copilotInjuries' => 'required',
            'emergencyTeam' => 'required',
            'searchWork' => 'required',
            'descriptionFacts' => 'required',
            'investigatorCharge' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }    
    public function render()
    {
        return view('livewire.report.if-view.afac001.create')
            ->extends('layouts.app')
            // ->section('title','')
            ->section('content');
    }
    public function updatedBrandId($brand_id)
    {
        $this->models =  aModel::where('brand_id', $brand_id)->get();
    }
    public function clean()
    {
        $this->reset([
            'dateEvent', 'hourEvent', 'brand_id', 'amodel_id', 'serialNumber', 'licensePlate', 'maximumWeight', 'airworthinessCertificate', 'validity',
            'owner', 'place', 'latitude', 'longitude', 'elevation', 'crashSite', 'aircraftDamage', 'place_origen_id', 'place_destination_id', 'serviceOfDestiny', 'dangerousGoods', 'type',
            'base_operation_id', 'peopleOnBoard', 'fatalInjuries', 'seriousInjuries', 'otherFatalInjuries', 'nationality_passengers_id', 'commanderName', 'nationality_commander_id', 'licenseNumber',
            'category', 'validityLicense', 'oficialName', 'nationality_oficial_id', 'licenseNumberOficial', 'categoryOficial', 'validityLicenseOficial', 'copilotInjuries', 'emergencyTeam', 'searchWork',
            'descriptionFacts', 'investigatorCharge', 'telephone', 'email'
        ]);
    }
    public function save()
    {
        $this->validate();
        $this->afac001id = Afac001::updateOrCreate(
            ['id' => $this->id_reporter],
            [
                'general_user_id' => $this->idReporter,
                'dateEvent' => $this->dateEvent,
                'hourEvent' => $this->hourEvent,
                'brand_id' => $this->brand_id,
                'amodel_id' => $this->amodel_id,
                'serialNumber' => $this->serialNumber,
                'licensePlate' => $this->licensePlate,
                'maximumWeight' => $this->maximumWeight,
                'airworthinessCertificate' => $this->airworthinessCertificate,
                'validity' => $this->validity,
                'owner' => $this->owner,
                'place' => $this->place,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'elevation' => $this->elevation,
                'crashSite' => $this->crashSite,
                'aircraftDamage' => $this->aircraftDamage,
                'place_origen_id' => $this->place_origen_id,
                'place_destination_id' => $this->place_destination_id,
                'serviceOfDestiny' => $this->serviceOfDestiny,
                'dangerousGoods' => $this->dangerousGoods,
                'type' => $this->type,
                'base_operation_id' => $this->base_operation_id,
                'peopleOnBoard' => $this->peopleOnBoard,
                'fatalInjuries' => $this->fatalInjuries,
                'seriousInjuries' => $this->seriousInjuries,
                'otherFatalInjuries' => $this->otherFatalInjuries,
                'nationality_passengers_id' => $this->nationality_passengers_id,
                'commanderName' => $this->commanderName,
                'nationality_commander_id' => $this->nationality_commander_id,
                'licenseNumber' => $this->licenseNumber,
                'category' => $this->category,
                'validityLicense' => $this->validityLicense,
                'oficialName' => $this->oficialName,
                'nationality_oficial_id' => $this->nationality_oficial_id,
                'licenseNumberOficial' => $this->licenseNumberOficial,
                'categoryOficial' => $this->categoryOficial,
                'validityLicenseOficial' => $this->validityLicenseOficial,
                'copilotInjuries' => $this->copilotInjuries,
                'emergencyTeam' => $this->emergencyTeam,
                'searchWork' => $this->searchWork,
                'descriptionFacts' => $this->descriptionFacts,
                'investigatorCharge' => $this->investigatorCharge,
                'telephone' => $this->telephone,
                'email' => $this->email
            ]
        );
        // $this->clean();
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
                'method' => 'cleanInput',
            ],
        ]);
    }
    public function print()
    {
        $id = $this->afac001id->id;
        return redirect()->route('afac001-pdf', compact('id'));
    }
    public function PdfAfac001()
    {

        $afac001Report = Afac001::with([
            'afac001GeneralUser', 'afac001Brand', 'afac001Model', 'afac001PlaceOrigen', 'afac001PlaceDestination',
            'afac001BaseOperation', 'afac001NationalityPassengers', 'afac001NationalityCommander', 'afac001NationalityOficial'
        ])->where('id', $_GET['id'])->get();
        // $afac001Report = Afac001::where('id', $_GET['id'])->get();
        
 

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $date = Carbon::parse($afac001Report[0]->dateEvent);
        $mes = $meses[($date->format('n')) - 1];
        $pdf = PDF::loadView('report.ifView.afac001.pdf.afac001-pdf', compact('afac001Report','date','mes'));
 
        return $pdf->download('reporte_No_' . $afac001Report[0]->id . '.pdf');
    }
    public function messages()
    {
        return [
            'dateEvent.required' => 'Campo obligatorio',
            'hourEvent.required' => 'Campo obligatorio',
            'brand_id.required' => 'Campo obligatorio',
            'amodel_id.required' => 'Campo obligatorio',
            'serialNumber.required' => 'Campo obligatorio',
            'licensePlate.required' => 'Campo obligatorio',
            'maximumWeight.required' => 'Campo obligatorio',
            'airworthinessCertificate.required' => 'Campo obligatorio',
            'validity.required' => 'Campo obligatorio',
            'owner.required' => 'Campo obligatorio',
            'place.required' => 'Campo obligatorio',
            'latitude.required' => 'Campo obligatorio',
            'longitude.required' => 'Campo obligatorio',
            'elevation.required' => 'Campo obligatorio',
            'crashSite.required' => 'Campo obligatorio',
            'aircraftDamage.required' => 'Campo obligatorio',
            'place_origen_id.required' => 'Campo obligatorio',
            'place_destination_id.required' => 'Campo obligatorio',
            'serviceOfDestiny.required' => 'Campo obligatorio',
            'dangerousGoods.required' => 'Campo obligatorio',
            'type.required' => 'Campo obligatorio',
            'base_operation_id.required' => 'Campo obligatorio',
            'peopleOnBoard.required' => 'Campo obligatorio',
            'fatalInjuries.required' => 'Campo obligatorio',
            'seriousInjuries.required' => 'Campo obligatorio',
            'otherFatalInjuries.required' => 'Campo obligatorio',
            'nationality_passengers_id.required' => 'Campo obligatorio',
            'commanderName.required' => 'Campo obligatorio',
            'nationality_commander_id.required' => 'Campo obligatorio',
            'licenseNumber.required' => 'Campo obligatorio',
            'category.required' => 'Campo obligatorio',
            'validityLicense.required' => 'Campo obligatorio',
            'oficialName.required' => 'Campo obligatorio',
            'nationality_oficial_id.required' => 'Campo obligatorio',
            'licenseNumberOficial.required' => 'Campo obligatorio',
            'categoryOficial.required' => 'Campo obligatorio',
            'validityLicenseOficial.required' => 'Campo obligatorio',
            'copilotInjuries.required' => 'Campo obligatorio',
            'emergencyTeam.required' => 'Campo obligatorio',
            'searchWork.required' => 'Campo obligatorio',
            'descriptionFacts.required' => 'Campo obligatorio',
            'investigatorCharge.required' => 'Campo obligatorio',
            'telephone.required' => 'Campo obligatorio',
            'email.required' => 'Campo obligatorio',
            'email.email' => 'Correo no valido',
        ];
    }
}
