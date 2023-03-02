<?php

namespace App\Http\Livewire\Report\NoView;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\CodeAta;
use App\Models\Catalogue\Event;
use App\Models\Catalogue\License;
use App\Models\Catalogue\LicenseType;
use App\Models\Catalogue\Municipal;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\Catalogue\State;
use App\Models\Catalogue\SubEvent;
use App\Models\Catalogue\Type;
use App\Models\Report\NoReport\ReportIncident;
use App\Models\Report\NoReport\ReportIncidentInvolved;
use App\Models\Report\NoReport\ReportIncidentNotInvolved;
use Livewire\Component;

class Incident extends Component
{
    public $id_user, $id_incidente, $id_notInvolved, $event, $event_id, $sub_event_id, $other, $report_involved;
    // CATALOGUES INVOLVED YES
    public $id_Involved, $placeInvolved, $state_id, $municipal_id, $dateStartInvolved, $hourStartInvolved, $type_id, $amodel_id, $classlicenspilot, $license_id_copilot,
        $forigin_id, $fdestination_id, $commodity, $observations, $descriptionInvolved;
    // TABLE NOT INVOLVED
    public $dateStartNot, $hourStartNot, $placeNotInv, $descriptionNot, $consequenceNot, $proposalsNot, $frequentNot, $gravityNot;
    // CATALOGUE WITH ARRAY TO METHOD MOUNT
    public $events, $tipoevento, $states, $estado, $tipo, $tipos, $brand_id, $marca, $typeLicensePlate, $licensePlate, $serialNumber, $owner,
        $boperation_id, $aircraftDamage, $nameCaptan, $national_capitan, $license_id, $nationalities, $boperations, $license_type_id, $expire, $injuries, $namePilot,
        $national_pilot, $licensecopilot, $license_type_id_copilot, $expirePilot, $injuriesPilot, $injuriesPassengers, $origen_vuelo;
    public $subevents = [], $municipals = [], $brands = [], $amodels = [], $licenses = [], $licensetypes = [], $licensetypesCopilot = [],
        $forigins = [], $fdestinations = [], $codeAtas = [];

    // VARIABLES TO PROC FORMS
    public $id_InvolvedProc, $type_id_proc, $brand_id_proc, $amodel_id_proc, $serialNumberProc, $typeLicensePlateProc, $licensePlateProc, $ownerProc, $dateStartInvolvedProc,
        $boperation_id_proc, $brandProc, $modelProc, $posProc1, $posProc2, $posProc3, $posProc4, $brandProcEngine, $modelProcEngine, $posProcEngine1, $posProcEngine2,
        $posProcEngine3, $posProcEngine4, $earthProc, $descriptionProc, $origenProc, $actionProc, $componentProc, $nPProc, $nsPProc, $factoryProc, $hourControl, $cycleControl,
        $daysControl, $otherControl, $ttComponent, $ctComponent, $turmComponent, $curmComponent, $workshop, $code_ata_id, $stc, $considerInformation;
    //    VARIABLES TO RVSM FORMS
    public $id_InvolvedRvsm, $typeReport, $dateStartRVSM, $hourStartRVSM, $typeDeviation, $routeSegment, $acc, $causes, $airplaneIdenti, $ownerRVSM, $type_id_rvsm, $brand_id_rvsm, $amodel_id_rvsm,
        $assignedFlight, $currentFlight, $mistake, $timeLine, $deviationPosition, $trafficConflict, $actionATC, $otherComments, $state_id_rvsm, $municipal_id_rvsm, $dateNotification;

    public $id_InvolvedBird, $typeLicensePlateBird, $licensePlateBird, $type_id_bird, $brand_id_bird, $amodel_id_bird, $engineBird, $brandProcEngineBird, $modelProcEngineBird, $ownerBird, $dateStartBird, $hourStartBird, $boperation_id_bird,
        $runway, $location, $height, $speed, $flightPhases, $radome, $windshield, $noseAB, $engine1, $engine2, $engine3, $engine4, $propeller, $rotor, $fuselage, $undercarriage, $tail, $lights, $otherBird, $otherBirdResult, $eventEffect, $skyCondition, $restrictionsVisibility,
        $restrictionsOther, $speciesfauna, $eventEffectOther, $specimensSeen1, $specimensSeen2to10, $specimensSeen11to100, $specimenSize, $pilotNotice, $observationsBird, $aircraftOut, $repairCost, $otherCost, $reportedBy, $marketStall, $company, $producedBy, $authority;
    public function rules()
    {
        return [
            'event' => 'required',
            'id_user' => 'required',
            'event_id' => 'required',
            'sub_event_id' => 'required',
            'report_involved' => 'required',
            // RULES NOT INVOLVED INCIDENT
            'dateStartNot' => 'required_if:report_involved,2',
            'hourStartNot' => 'required_if:report_involved,2',
            'placeNotInv' => 'required_if:report_involved,2',
            'descriptionNot' => 'required_if:report_involved,2',
            'consequenceNot' => 'required_if:report_involved,2',
            'proposalsNot' => 'required_if:report_involved,2',
            'frequentNot' => 'required_if:report_involved,2',
            'gravityNot' => 'required_if:report_involved,2',
            // 
            // RULES FIRST FORM YES INVOLVED
            'placeInvolved' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'state_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'municipal_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'dateStartInvolved' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'hourStartInvolved' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'type_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'brand_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'amodel_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'typeLicensePlate' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'licensePlate' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'serialNumber' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'owner' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'boperation_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'aircraftDamage' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'nameCaptan' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'national_capitan' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'license_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'license_type_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'expire' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'injuries' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'namePilot' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'national_pilot' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'license_id_copilot'  => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'license_type_id_copilot'  => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'expirePilot' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'injuriesPilot' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'injuriesPassengers' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'forigin_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'fdestination_id' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'commodity' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            'descriptionInvolved' => 'required_if:sub_event_id,1|required_if:report_involved,1',
            // FORMS (PROC) INVOLVED
            'type_id_proc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'brand_id_proc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'amodel_id_proc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'serialNumberProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'typeLicensePlateProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'licensePlateProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'ownerProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'dateStartInvolvedProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'boperation_id_proc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'brandProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'modelProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'brandProcEngine' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'modelProcEngine' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'earthProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'descriptionProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'origenProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'actionProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'componentProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'nPProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'nsPProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'factoryProc' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'hourControl' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'cycleControl' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'daysControl' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'ttComponent' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'ctComponent' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'turmComponent' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'curmComponent' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'workshop' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            'code_ata_id' => 'required_if:sub_event_id,2|required_if:report_involved,1',
            // FORM TO RSVSM
            'typeReport' => 'required_if:sub_event_id,45',
            'dateStartRVSM' => 'required_if:sub_event_id,45',
            'hourStartRVSM' => 'required_if:sub_event_id,45',
            'typeDeviation' => 'required_if:sub_event_id,45',
            'routeSegment' => 'required_if:sub_event_id,45',
            'acc' => 'required_if:sub_event_id,45',
            'causes' => 'required_if:sub_event_id,45',
            'airplaneIdenti' => 'required_if:sub_event_id,45',
            'ownerRVSM' => 'required_if:sub_event_id,45',
            'type_id_rvsm' => 'required_if:sub_event_id,45',
            'brand_id_rvsm' => 'required_if:sub_event_id,45',
            'amodel_id_rvsm' => 'required_if:sub_event_id,45',
            'assignedFlight' => 'required_if:sub_event_id,45',
            'currentFlight' => 'required_if:sub_event_id,45',
            'mistake' => 'required_if:sub_event_id,45',
            'timeLine' => 'required_if:sub_event_id,45',
            'deviationPosition' => 'required_if:sub_event_id,45',
            'trafficConflict' => 'required_if:sub_event_id,45',
            'actionATC' => 'required_if:sub_event_id,45',
            'state_id_rvsm' => 'required_if:sub_event_id,45',
            'municipal_id_rvsm' => 'required_if:sub_event_id,45',
            'dateNotification' => 'required_if:sub_event_id,45',
            // FORM TO BIRD
            'typeLicensePlateBird' => 'required_if:sub_event_id,54',
            'licensePlateBird' => 'required_if:sub_event_id,54',
            'type_id_bird' => 'required_if:sub_event_id,54',
            'brand_id_bird' => 'required_if:sub_event_id,54',
            'amodel_id_bird' => 'required_if:sub_event_id,54',
            'engineBird' => 'required_if:sub_event_id,54',
            'brandProcEngineBird' => 'required_if:sub_event_id,54',
            'modelProcEngineBird' => 'required_if:sub_event_id,54',
            'ownerBird' => 'required_if:sub_event_id,54',
            'dateStartBird' => 'required_if:sub_event_id,54',
            'hourStartBird' => 'required_if:sub_event_id,54',
            'boperation_id_bird' => 'required_if:sub_event_id,54',
            'runway' => 'required_if:sub_event_id,54',
            'location' => 'required_if:sub_event_id,54',
            'height' => 'required_if:sub_event_id,54',
            'speed' => 'required_if:sub_event_id,54',
            'flightPhases' => 'required_if:sub_event_id,54',
            'eventEffect' => 'required_if:sub_event_id,54',
            'skyCondition' => 'required_if:sub_event_id,54',
            'restrictionsVisibility' => 'required_if:sub_event_id,54',
            'speciesfauna' => 'required_if:sub_event_id,54',
            'specimenSize' => 'required_if:sub_event_id,54',
            'pilotNotice' => 'required_if:sub_event_id,54',
            'observationsBird' => 'required_if:sub_event_id,54',
            'aircraftOut' => 'required_if:sub_event_id,54',
            'repairCost' => 'required_if:sub_event_id,54',
            'otherCost' => 'required_if:sub_event_id,54',
            'reportedBy' => 'required_if:sub_event_id,54',
            'marketStall' => 'required_if:sub_event_id,54',
            'company' => 'required_if:sub_event_id,54',
            'producedBy' => 'required_if:sub_event_id,54',
            'authority' => 'required_if:sub_event_id,54',
        ];
    }
    public function mount($id_user)
    {
        $this->reset();
        $this->events = Event::all();
        $this->states = State::all();
        $this->tipos = Type::all();
        $this->nationalities = Nacionality::all();
        $this->boperations = BaseOperation::all();
        $this->licenses = License::all();
        $this->forigins = Place::all();
        $this->fdestinations = Place::all();
        $this->codeAtas = CodeAta::all();
        $this->brands = collect();
        $this->licensetypes = collect();
        $this->id_user = $id_user;
    }
    public function render()
    {
        return view('livewire.report.no-view.incident');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updatedtipoevento($subevento_id)
    {
        $this->subevents = SubEvent::where('event_id', $subevento_id)->get();
    }
    public function updatedestado($estado_id)
    {
        $this->municipals = Municipal::where('state_id', $estado_id)->get();
    }
    public function updatedtipo($tipo_id)
    {
        $this->brands =  Brand::where('type_id', $tipo_id)->get();
    }
    public function updatedmarca($marca_id)
    {
        $this->amodels = aModel::where('brand_id', $marca_id)->get();
    }
    public function updatedclasslicenspilot($licencia_id)
    {
        $this->licensetypes = LicenseType::where('license_id', $licencia_id)->get();
    }
    public function updatedlicensecopilot($licencia_id_copilot)
    {
        $this->licensetypesCopilot = LicenseType::where('license_id', $licencia_id_copilot)->get();
    }
    public function limpiarCampos()
    {
        $this->event = '';
        $this->event_id = '';
        $this->sub_event_id = '';
        $this->other = '';
        $this->report_involved = '';
    }
    public function save()
    {
        $this->validate();
        if (!empty($this->other)) {
            $otherNull = $this->other;
        } else {
            $otherNull = 'N/A';
        }
        if (!empty($this->otherBird)) {
            $otherBirdNull = $this->otherBird;
        } else {
            $otherBirdNull = 'N/A';
        }

        if (!empty($this->otherBirdResult)) {
            $otherBirdResultNull = $this->otherBirdResult;
        } else {
            $otherBirdResultNull = 'N/A';
        }
        if (!empty($this->restrictionsOther)) {
            $restrictionsOtherNull = $this->restrictionsOther;
        } else {
            $restrictionsOtherNull = 'N/A';
        }
        if (!empty($this->radome)) {
            $radomeNull = $this->radome;
        } else {
            $radomeNull = 'N/A';
        }
        if (!empty($this->windshield)) {
            $windshieldNull = $this->windshield;
        } else {
            $windshieldNull = 'N/A';
        }
        if (!empty($this->noseAB)) {
            $noseABNull = $this->noseAB;
        } else {
            $noseABNull = 'N/A';
        }
        if (!empty($this->engine1)) {
            $engine1Null = $this->engine1;
        } else {
            $engine1Null = 'N/A';
        }
        if (!empty($this->engine2)) {
            $engine2Null = $this->engine2;
        } else {
            $engine2Null = 'N/A';
        }
        if (!empty($this->engine3)) {
            $engine3Null = $this->engine3;
        } else {
            $engine3Null = 'N/A';
        }
        if (!empty($this->engine4)) {
            $engine4Null = $this->engine4;
        } else {
            $engine4Null = 'N/A';
        }
        if (!empty($this->propeller)) {
            $propellerNull = $this->propeller;
        } else {
            $propellerNull = 'N/A';
        }
        if (!empty($this->rotor)) {
            $rotorNull = $this->rotor;
        } else {
            $rotorNull = 'N/A';
        }
        if (!empty($this->fuselage)) {
            $fuselageNull = $this->fuselage;
        } else {
            $fuselageNull = 'N/A';
        }
        if (!empty($this->undercarriage)) {
            $undercarriageNull = $this->undercarriage;
        } else {
            $undercarriageNull = 'N/A';
        }
        if (!empty($this->tail)) {
            $tailNull = $this->tail;
        } else {
            $tailNull = 'N/A';
        }
        if (!empty($this->lights)) {
            $lightsNull = $this->lights;
        } else {
            $lightsNull = 'N/A';
        }
        if (!empty($this->eventEffectOther)) {
            $eventEffectOtherNull = $this->eventEffectOther;
        } else {
            $eventEffectOtherNull = 'N/A';
        }
        if (!empty($this->specimensSeen1)) {
            $specimensSeen1Null = $this->specimensSeen1;
        } else {
            $specimensSeen1Null = 'N/A';
        }
        if (!empty($this->specimensSeen2to10)) {
            $specimensSeen2to10Null = $this->specimensSeen2to10;
        } else {
            $specimensSeen2to10Null = 'N/A';
        }
        if (!empty($this->specimensSeen11to100)) {
            $specimensSeen11to100Null = $this->specimensSeen11to100;
        } else {
            $specimensSeen11to100Null = 'N/A';
        }
        $idIncidente = ReportIncident::updateOrCreate(
            ['id' => $this->id_incidente],
            [
                'general_user_id' => $this->id_user,
                'event' => $this->event,
                'event_id' => $this->event_id,
                'sub_event_id' => $this->sub_event_id,
                'other' => $otherNull
            ],
        );

        if ($this->sub_event_id == 1) {
            ReportIncidentInvolved::updateOrCreate(
                ['id' => $this->id_Involved],
                [
                    'report_incident_id' => $idIncidente->id,
                    'placeInvolved' => $this->placeInvolved,
                    'state_id' => $this->state_id,
                    'municipal_id' => $this->municipal_id,
                    'dateStartInvolved' => $this->dateStartInvolved,
                    'hourStartInvolved' => $this->hourStartInvolved,
                    'type_id' => $this->type_id,
                    'brand_id' => $this->brand_id,
                    'amodel_id' => $this->amodel_id,
                    'typeLicensePlate' => $this->typeLicensePlate,
                    'licensePlate' => $this->licensePlate,
                    'serialNumber' => $this->serialNumber,
                    'owner' => $this->owner,
                    'boperation_id' => $this->boperation_id,
                    'aircraftDamage' => $this->aircraftDamage,
                    'nameCaptan' => $this->nameCaptan,
                    'national_capitan' => $this->national_capitan,
                    'license_id' => $this->license_id,
                    'license_type_id' => $this->license_type_id,
                    'expire' => $this->expire,
                    'injuries' => $this->injuries,
                    'namePilot' => $this->namePilot,
                    'national_pilot' => $this->national_pilot,
                    'license_id_copilot' => $this->license_id_copilot,
                    'license_type_id_copilot' => $this->license_type_id_copilot,
                    'expirePilot' => $this->expirePilot,
                    'injuriesPilot' => $this->injuriesPilot,
                    'injuriesPassengers' => $this->injuriesPassengers,
                    'forigin_id' => $this->forigin_id,
                    'fdestination_id' => $this->fdestination_id,
                    'commodity' => $this->commodity,
                    'descriptionInvolved' => $this->descriptionInvolved

                ],
            );
        } else if ($this->report_involved == 2) {
            ReportIncidentNotInvolved::updateOrCreate(
                ['id' => $this->id_notInvolved],
                [
                    'report_incident_id' => $idIncidente->id,
                    'dateStartNot' => $this->dateStartNot,
                    'hourStartNot' => $this->hourStartNot,
                    'placeNotInv' => $this->placeNotInv,
                    'descriptionNot' => $this->descriptionNot,
                    'consequenceNot' => $this->consequenceNot,
                    'proposalsNot' => $this->proposalsNot,
                    'frequentNot' => $this->frequentNot,
                    'gravityNot' => $this->gravityNot,

                ],
            );
        }
        // else if ($this->sub_event_id == 2) {
        //     TypeIncidentInvolvedProc::updateOrCreate(
        //         ['id' => $this->id_InvolvedProc],
        //         [
        //             'report_incident_id' => $idIncidente->id,
        //             'type_id_proc' => $this->type_id_proc,
        //             'brand_id_proc' => $this->brand_id_proc,
        //             'amodel_id_proc' => $this->amodel_id_proc,
        //             'serialNumberProc' => $this->serialNumberProc,
        //             'typeLicensePlateProc' => $this->typeLicensePlateProc,
        //             'licensePlateProc' => $this->licensePlateProc,
        //             'ownerProc' => $this->ownerProc,
        //             'dateStartInvolvedProc' => $this->dateStartInvolvedProc,
        //             'boperation_id_proc' => $this->boperation_id_proc,
        //             'brandProc' => $this->brandProc,
        //             'modelProc' => $this->modelProc,
        //             'posProc1' => $this->posProc1,
        //             'posProc2' => $this->posProc2,
        //             'posProc3' => $this->posProc3,
        //             'posProc4' => $this->posProc4,
        //             'brandProcEngine' => $this->brandProcEngine,
        //             'modelProcEngine' => $this->modelProcEngine,
        //             'posProcEngine1' => $this->posProcEngine1,
        //             'posProcEngine2' => $this->posProcEngine2,
        //             'posProcEngine3' => $this->posProcEngine3,
        //             'posProcEngine4' => $this->posProcEngine4,
        //             'earthProc' => $this->earthProc,
        //             'descriptionProc' => $this->descriptionProc,
        //             'origenProc' => $this->origenProc,
        //             'actionProc' => $this->actionProc,
        //             'componentProc' => $this->componentProc,
        //             'nPProc' => $this->nPProc,
        //             'nsPProc' => $this->nsPProc,
        //             'factoryProc' => $this->factoryProc,
        //             'hourControl' => $this->hourControl,
        //             'cycleControl' => $this->cycleControl,
        //             'daysControl' => $this->daysControl,
        //             'otherControl' => $this->otherControl,
        //             'ttComponent' => $this->ttComponent,
        //             'ctComponent' => $this->ctComponent,
        //             'turmComponent' => $this->turmComponent,
        //             'curmComponent' => $this->curmComponent,
        //             'workshop' => $this->workshop,
        //             'code_ata_id' => $this->code_ata_id,
        //             'stc' => $this->stc,
        //             'considerInformation' => $this->considerInformation,
        //         ],
        //     );
        // } else if ($this->sub_event_id == 45) {
        //     TypeIncidentrvsm::updateOrCreate(
        //         ['id' => $this->id_InvolvedRvsm],
        //         [
        //             'report_incident_id' => $idIncidente->id,
        //             'typeReport' => $this->typeReport,
        //             'dateStartRVSM' => $this->dateStartRVSM,
        //             'hourStartRVSM' => $this->hourStartRVSM,
        //             'typeDeviation' => $this->typeDeviation,
        //             'routeSegment' => $this->routeSegment,
        //             'acc' => $this->acc,
        //             'causes' => $this->causes,
        //             'airplaneIdenti' => $this->airplaneIdenti,
        //             'ownerRVSM' => $this->ownerRVSM,
        //             'type_id_rvsm' => $this->type_id_rvsm,
        //             'brand_id_rvsm' => $this->brand_id_rvsm,
        //             'amodel_id_rvsm' => $this->amodel_id_rvsm,
        //             'assignedFlight' => $this->assignedFlight,
        //             'currentFlight' => $this->currentFlight,
        //             'mistake' => $this->mistake,
        //             'timeLine' => $this->timeLine,
        //             'deviationPosition' => $this->deviationPosition,
        //             'trafficConflict' => $this->trafficConflict,
        //             'actionATC' => $this->actionATC,
        //             'otherComments' => $this->otherComments,
        //             'state_id_rvsm' => $this->state_id_rvsm,
        //             'municipal_id_rvsm' => $this->municipal_id_rvsm,
        //             'dateNotification' => $this->dateNotification,

        //         ],
        //     );
        // } else if ($this->sub_event_id == 54) {
        //     TypeIncidentBird::updateOrCreate(
        //         ['id' => $this->id_InvolvedBird],
        //         [
        //             'report_incident_id' => $idIncidente->id,
        //             'typeLicensePlateBird' => $this->typeLicensePlateBird,
        //             'licensePlateBird' => $this->licensePlateBird,
        //             'type_id_bird' => $this->type_id_bird,
        //             'brand_id_bird' => $this->brand_id_bird,
        //             'amodel_id_bird' => $this->amodel_id_bird,
        //             'engineBird' => $this->engineBird,
        //             'brandProcEngineBird' => $this->brandProcEngineBird,
        //             'modelProcEngineBird' => $this->modelProcEngineBird,
        //             'ownerBird' => $this->ownerBird,
        //             'dateStartBird' => $this->dateStartBird,
        //             'hourStartBird' => $this->hourStartBird,
        //             'boperation_id_bird' => $this->boperation_id_bird,
        //             'runway' => $this->runway,
        //             'location' => $this->location,
        //             'height' => $this->height,
        //             'speed' => $this->speed,
        //             'flightPhases' => $this->flightPhases,
        //             'radome' => $radomeNull,
        //             'windshield' => $windshieldNull,
        //             'noseAB' => $noseABNull,
        //             'engine1' => $engine1Null,
        //             'engine2' => $engine2Null,
        //             'engine3' => $engine3Null,
        //             'engine4' => $engine4Null,
        //             'propeller' => $propellerNull,
        //             'rotor' => $rotorNull,
        //             'fuselage' => $fuselageNull,
        //             'undercarriage' => $undercarriageNull,
        //             'tail' => $tailNull,
        //             'lights' => $lightsNull,
        //             'otherBird' => $otherBirdNull,
        //             'otherBirdResult' => $otherBirdResultNull,
        //             'eventEffect' => $this->eventEffect,
        //             'eventEffectOther'=> $eventEffectOtherNull,
        //             'skyCondition' => $this->skyCondition,
        //             'restrictionsVisibility' => $this->restrictionsVisibility,
        //             'restrictionsOther' => $restrictionsOtherNull,
        //             'speciesfauna' => $this->speciesfauna,
        //             'specimensSeen1' => $specimensSeen1Null,
        //             'specimensSeen2to10' => $specimensSeen2to10Null,
        //             'specimensSeen11to100' => $specimensSeen11to100Null,
        //             'specimenSize' => $this->specimenSize,
        //             'pilotNotice' => $this->pilotNotice,
        //             'observationsBird' => $this->observationsBird,
        //             'aircraftOut' => $this->aircraftOut,
        //             'repairCost' => $this->repairCost,
        //             'otherCost' => $this->otherCost,
        //             'reportedBy' => $this->reportedBy,
        //             'marketStall' => $this->marketStall,
        //             'company' => $this->company,
        //             'producedBy' => $this->producedBy,
        //             'authority' => $this->authority,

        //         ],
        //     );
        // }
        // SECOND VALIDATION
    }
}
