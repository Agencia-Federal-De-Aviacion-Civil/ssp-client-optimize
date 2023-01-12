<?php

namespace App\Http\Livewire\Report\IfView\Afac001;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use Livewire\Component;

class Create extends Component
{
    public $brands, $operationsBase, $nacionalities, $placesDestinations, $models;
    public $dateEvent, $hourEvent, $brand_id, $amodel_id, $serialNumber, $licensePlate, $maximumWeight, $airworthinessCertificate, $validity, $owner, $place, $latitude, $longitude,
        $elevation, $crashSite, $aircraftDamage, $place_destination_origin_id, $place_destination_destiny_id, $serviceOfDestiny, $dangerousGoods, $type, $base_operation_id, $peopleOnBoard,
        $fatalInjuries, $seriousInjuries, $otherFatalInjuries, $nationality_passengers_id, $commanderName, $nationality_commander_id, $licenseNumber, $category, $validityLicense,
        $oficialName, $nationality_oficial_id, $licenseNumberOficial, $categoryOficial, $validityLicenseOficial, $copilotInjuries, $emergencyTeam, $searchWork, $descriptionFacts,
        $investigatorCharge, $telephone, $email;
    public function mount()
    {
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
            'place_destination_origin_id' => 'required',
            'place_destination_destiny_id' => 'required',
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
    public function save()
    {
        $this->validate();
    }
}
