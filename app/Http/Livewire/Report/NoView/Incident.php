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
use App\Models\Report\NoReport\ReportIncidentInvolvedBird;
use App\Models\Report\NoReport\ReportIncidentInvolvedProc;
use App\Models\Report\NoReport\ReportIncidentInvolvedRvsm;
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
            'dateStartNot' => '',
            'hourStartNot' => '',
            'placeNotInv' => '',
            'descriptionNot' => '',
            'consequenceNot' => '',
            'proposalsNot' => '',
            'frequentNot' => '',
            'gravityNot' => '',
            // 
            // RULES FIRST FORM YES INVOLVED
            'placeInvolved' => '',
            'state_id' => '',
            'municipal_id' => '',
            'dateStartInvolved' => '',
            'hourStartInvolved' => '',
            'type_id' => '',
            'brand_id' => '',
            'amodel_id' => '',
            'typeLicensePlate' => '',
            'licensePlate' => '',
            'serialNumber' => '',
            'owner' => '',
            'boperation_id' => '',
            'aircraftDamage' => '',
            'nameCaptan' => '',
            'national_capitan' => '',
            'license_id' => '',
            'license_type_id' => '',
            'expire' => '',
            'injuries' => '',
            'namePilot' => '',
            'national_pilot' => '',
            'license_id_copilot'  => '',
            'license_type_id_copilot'  => '',
            'expirePilot' => '',
            'injuriesPilot' => '',
            'injuriesPassengers' => '',
            'forigin_id' => '',
            'fdestination_id' => '',
            'commodity' => '',
            'descriptionInvolved' => '',
            // FORMS (PROC) INVOLVED
            'type_id_proc' => '',
            'brand_id_proc' => '',
            'amodel_id_proc' => '',
            'serialNumberProc' => '',
            'typeLicensePlateProc' => '',
            'licensePlateProc' => '',
            'ownerProc' => '',
            'dateStartInvolvedProc' => '',
            'boperation_id_proc' => '',
            'brandProc' => '',
            'modelProc' => '',
            'brandProcEngine' => '',
            'modelProcEngine' => '',
            'earthProc' => '',
            'descriptionProc' => '',
            'origenProc' => '',
            'actionProc' => '',
            'componentProc' => '',
            'nPProc' => '',
            'nsPProc' => '',
            'factoryProc' => '',
            'hourControl' => '',
            'cycleControl' => '',
            'daysControl' => '',
            'ttComponent' => '',
            'ctComponent' => '',
            'turmComponent' => '',
            'curmComponent' => '',
            'workshop' => '',
            'code_ata_id' => '',
            // FORM TO RSVSM
            'typeReport' => '',
            'dateStartRVSM' => '',
            'hourStartRVSM' => '',
            'typeDeviation' => '',
            'routeSegment' => '',
            'acc' => '',
            'causes' => '',
            'airplaneIdenti' => '',
            'ownerRVSM' => '',
            'type_id_rvsm' => '',
            'brand_id_rvsm' => '',
            'amodel_id_rvsm' => '',
            'assignedFlight' => '',
            'currentFlight' => '',
            'mistake' => '',
            'timeLine' => '',
            'deviationPosition' => '',
            'trafficConflict' => '',
            'actionATC' => '',
            'state_id_rvsm' => '',
            'municipal_id_rvsm' => '',
            'dateNotification' => '',
            // FORM TO BIRD
            'typeLicensePlateBird' => '',
            'licensePlateBird' => '',
            'type_id_bird' => '',
            'brand_id_bird' => '',
            'amodel_id_bird' => '',
            'engineBird' => '',
            'brandProcEngineBird' => '',
            'modelProcEngineBird' => '',
            'ownerBird' => '',
            'dateStartBird' => '',
            'hourStartBird' => '',
            'boperation_id_bird' => '',
            'runway' => '',
            'location' => '',
            'height' => '',
            'speed' => '',
            'flightPhases' => '',
            'eventEffect' => '',
            'skyCondition' => '',
            'restrictionsVisibility' => '',
            'speciesfauna' => '',
            'specimenSize' => '',
            'pilotNotice' => '',
            'observationsBird' => '',
            'aircraftOut' => '',
            'repairCost' => '',
            'otherCost' => '',
            'reportedBy' => '',
            'marketStall' => '',
            'company' => '',
            'producedBy' => '',
            'authority' => '',
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
        $validateGlobal = $this->validate();
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
            $validateGlobal
        );

        if ($this->sub_event_id == 1 && $this->report_involved == 1) {
            $this->validate([
                'placeInvolved' => 'required',
                'state_id' => 'required',
                'municipal_id' => 'required',
                'dateStartInvolved' => 'required',
                'hourStartInvolved' => 'required',
                'type_id' => 'required',
                'brand_id' => 'required',
                'amodel_id' => 'required',
                'typeLicensePlate' => 'required',
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
                'license_id_copilot'  => 'required',
                'license_type_id_copilot'  => 'required',
                'expirePilot' => 'required',
                'injuriesPilot' => 'required',
                'injuriesPassengers' => 'required',
                'forigin_id' => 'required',
                'fdestination_id' => 'required',
                'commodity' => 'required',
                'descriptionInvolved' => 'required',
            ]);
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
        } else if ($this->sub_event_id == 1 && $this->report_involved == 2) {
            $this->validate([
                'dateStartNot' => 'required',
                'hourStartNot' => 'required',
                'placeNotInv' => 'required',
                'descriptionNot' => 'required',
                'consequenceNot' => 'required',
                'proposalsNot' => 'required',
                'frequentNot' => 'required',
                'gravityNot' => 'required',
            ]);
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
            // SE REQUIEREN HACER VARIAS CONDICIONES POR CADA SELECCI??N DEL USUARIO
        }
        if ($this->sub_event_id == 2 && $this->report_involved == 1) {
            $this->validate([
                'type_id_proc' => 'required',
                'brand_id_proc' => 'required',
                'amodel_id_proc' => 'required',
                'serialNumberProc' => 'required',
                'typeLicensePlateProc' => 'required',
                'licensePlateProc' => 'required',
                'ownerProc' => 'required',
                'dateStartInvolvedProc' => 'required',
                'boperation_id_proc' => 'required',
                'brandProc' => 'required',
                'modelProc' => 'required',
                'brandProcEngine' => 'required',
                'modelProcEngine' => 'required',
                'earthProc' => 'required',
                'descriptionProc' => 'required',
                'origenProc' => 'required',
                'actionProc' => 'required',
                'componentProc' => 'required',
                'nPProc' => 'required',
                'nsPProc' => 'required',
                'factoryProc' => 'required',
                'hourControl' => 'required',
                'cycleControl' => 'required',
                'daysControl' => 'required',
                'ttComponent' => 'required',
                'ctComponent' => 'required',
                'turmComponent' => 'required',
                'curmComponent' => 'required',
                'workshop' => 'required',
                'code_ata_id' => 'required',
            ]);
            ReportIncidentInvolvedProc::updateOrCreate(
                ['id' => $this->id_InvolvedProc],
                [
                    'report_incident_id' => $idIncidente->id,
                    'type_id_proc' => $this->type_id_proc,
                    'brand_id_proc' => $this->brand_id_proc,
                    'amodel_id_proc' => $this->amodel_id_proc,
                    'serialNumberProc' => $this->serialNumberProc,
                    'typeLicensePlateProc' => $this->typeLicensePlateProc,
                    'licensePlateProc' => $this->licensePlateProc,
                    'ownerProc' => $this->ownerProc,
                    'dateStartInvolvedProc' => $this->dateStartInvolvedProc,
                    'boperation_id_proc' => $this->boperation_id_proc,
                    'brandProc' => $this->brandProc,
                    'modelProc' => $this->modelProc,
                    'posProc1' => $this->posProc1,
                    'posProc2' => $this->posProc2,
                    'posProc3' => $this->posProc3,
                    'posProc4' => $this->posProc4,
                    'brandProcEngine' => $this->brandProcEngine,
                    'modelProcEngine' => $this->modelProcEngine,
                    'posProcEngine1' => $this->posProcEngine1,
                    'posProcEngine2' => $this->posProcEngine2,
                    'posProcEngine3' => $this->posProcEngine3,
                    'posProcEngine4' => $this->posProcEngine4,
                    'earthProc' => $this->earthProc,
                    'descriptionProc' => $this->descriptionProc,
                    'origenProc' => $this->origenProc,
                    'actionProc' => $this->actionProc,
                    'componentProc' => $this->componentProc,
                    'nPProc' => $this->nPProc,
                    'nsPProc' => $this->nsPProc,
                    'factoryProc' => $this->factoryProc,
                    'hourControl' => $this->hourControl,
                    'cycleControl' => $this->cycleControl,
                    'daysControl' => $this->daysControl,
                    'otherControl' => $this->otherControl,
                    'ttComponent' => $this->ttComponent,
                    'ctComponent' => $this->ctComponent,
                    'turmComponent' => $this->turmComponent,
                    'curmComponent' => $this->curmComponent,
                    'workshop' => $this->workshop,
                    'code_ata_id' => $this->code_ata_id,
                    'stc' => $this->stc,
                    'considerInformation' => $this->considerInformation,
                ],
            );
        } else if ($this->sub_event_id == 2 && $this->report_involved == 2) {
            $this->validate([
                'dateStartNot' => 'required',
                'hourStartNot' => 'required',
                'placeNotInv' => 'required',
                'descriptionNot' => 'required',
                'consequenceNot' => 'required',
                'proposalsNot' => 'required',
                'frequentNot' => 'required',
                'gravityNot' => 'required',
            ]);
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
        if ($this->sub_event_id == 45) {
            $this->validate([
                'typeReport' => 'required',
                'dateStartRVSM' => 'required',
                'hourStartRVSM' => 'required',
                'typeDeviation' => 'required',
                'routeSegment' => 'required',
                'acc' => 'required',
                'causes' => 'required',
                'airplaneIdenti' => 'required',
                'ownerRVSM' => 'required',
                'type_id_rvsm' => 'required',
                'brand_id_rvsm' => 'required',
                'amodel_id_rvsm' => 'required',
                'assignedFlight' => 'required',
                'currentFlight' => 'required',
                'mistake' => 'required',
                'timeLine' => 'required',
                'deviationPosition' => 'required',
                'trafficConflict' => 'required',
                'actionATC' => 'required',
                'state_id_rvsm' => 'required',
                'municipal_id_rvsm' => 'required',
                'dateNotification' => 'required',
            ]);
            ReportIncidentInvolvedRvsm::updateOrCreate(
                ['id' => $this->id_InvolvedRvsm],
                [
                    'report_incident_id' => $idIncidente->id,
                    'typeReport' => $this->typeReport,
                    'dateStartRVSM' => $this->dateStartRVSM,
                    'hourStartRVSM' => $this->hourStartRVSM,
                    'typeDeviation' => $this->typeDeviation,
                    'routeSegment' => $this->routeSegment,
                    'acc' => $this->acc,
                    'causes' => $this->causes,
                    'airplaneIdenti' => $this->airplaneIdenti,
                    'ownerRVSM' => $this->ownerRVSM,
                    'type_id_rvsm' => $this->type_id_rvsm,
                    'brand_id_rvsm' => $this->brand_id_rvsm,
                    'amodel_id_rvsm' => $this->amodel_id_rvsm,
                    'assignedFlight' => $this->assignedFlight,
                    'currentFlight' => $this->currentFlight,
                    'mistake' => $this->mistake,
                    'timeLine' => $this->timeLine,
                    'deviationPosition' => $this->deviationPosition,
                    'trafficConflict' => $this->trafficConflict,
                    'actionATC' => $this->actionATC,
                    'otherComments' => $this->otherComments,
                    'state_id_rvsm' => $this->state_id_rvsm,
                    'municipal_id_rvsm' => $this->municipal_id_rvsm,
                    'dateNotification' => $this->dateNotification,

                ],
            );
        }
        if ($this->sub_event_id == 54) {
            $this->validate([
                'typeLicensePlateBird' => 'required',
                'licensePlateBird' => 'required',
                'type_id_bird' => 'required',
                'brand_id_bird' => 'required',
                'amodel_id_bird' => 'required',
                'engineBird' => 'required',
                'brandProcEngineBird' => 'required',
                'modelProcEngineBird' => 'required',
                'ownerBird' => 'required',
                'dateStartBird' => 'required',
                'hourStartBird' => 'required',
                'boperation_id_bird' => 'required',
                'runway' => 'required',
                'location' => 'required',
                'height' => 'required',
                'speed' => 'required',
                'flightPhases' => 'required',
                'eventEffect' => 'required',
                'skyCondition' => 'required',
                'restrictionsVisibility' => 'required',
                'speciesfauna' => 'required',
                'specimenSize' => 'required',
                'pilotNotice' => 'required',
                'observationsBird' => 'required',
                'aircraftOut' => 'required',
                'repairCost' => 'required',
                'otherCost' => 'required',
                'reportedBy' => 'required',
                'marketStall' => 'required',
                'company' => 'required',
                'producedBy' => 'required',
                'authority' => 'required',
            ]);
            ReportIncidentInvolvedBird::updateOrCreate(
                ['id' => $this->id_InvolvedBird],
                [
                    'report_incident_id' => $idIncidente->id,
                    'typeLicensePlateBird' => $this->typeLicensePlateBird,
                    'licensePlateBird' => $this->licensePlateBird,
                    'type_id_bird' => $this->type_id_bird,
                    'brand_id_bird' => $this->brand_id_bird,
                    'amodel_id_bird' => $this->amodel_id_bird,
                    'engineBird' => $this->engineBird,
                    'brandProcEngineBird' => $this->brandProcEngineBird,
                    'modelProcEngineBird' => $this->modelProcEngineBird,
                    'ownerBird' => $this->ownerBird,
                    'dateStartBird' => $this->dateStartBird,
                    'hourStartBird' => $this->hourStartBird,
                    'boperation_id_bird' => $this->boperation_id_bird,
                    'runway' => $this->runway,
                    'location' => $this->location,
                    'height' => $this->height,
                    'speed' => $this->speed,
                    'flightPhases' => $this->flightPhases,
                    'radome' => $radomeNull,
                    'windshield' => $windshieldNull,
                    'noseAB' => $noseABNull,
                    'engine1' => $engine1Null,
                    'engine2' => $engine2Null,
                    'engine3' => $engine3Null,
                    'engine4' => $engine4Null,
                    'propeller' => $propellerNull,
                    'rotor' => $rotorNull,
                    'fuselage' => $fuselageNull,
                    'undercarriage' => $undercarriageNull,
                    'tail' => $tailNull,
                    'lights' => $lightsNull,
                    'otherBird' => $otherBirdNull,
                    'otherBirdResult' => $otherBirdResultNull,
                    'eventEffect' => $this->eventEffect,
                    'eventEffectOther' => $eventEffectOtherNull,
                    'skyCondition' => $this->skyCondition,
                    'restrictionsVisibility' => $this->restrictionsVisibility,
                    'restrictionsOther' => $restrictionsOtherNull,
                    'speciesfauna' => $this->speciesfauna,
                    'specimensSeen1' => $specimensSeen1Null,
                    'specimensSeen2to10' => $specimensSeen2to10Null,
                    'specimensSeen11to100' => $specimensSeen11to100Null,
                    'specimenSize' => $this->specimenSize,
                    'pilotNotice' => $this->pilotNotice,
                    'observationsBird' => $this->observationsBird,
                    'aircraftOut' => $this->aircraftOut,
                    'repairCost' => $this->repairCost,
                    'otherCost' => $this->otherCost,
                    'reportedBy' => $this->reportedBy,
                    'marketStall' => $this->marketStall,
                    'company' => $this->company,
                    'producedBy' => $this->producedBy,
                    'authority' => $this->authority,

                ],
            );
        }
        // SECOND VALIDATION
    }
}
