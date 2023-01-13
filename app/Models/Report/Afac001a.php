<?php

namespace App\Models\Report;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use App\Models\User\GeneralUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afac001a extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function  afac001aGeneralUser()
    {
        return $this->belongsTo(GeneralUser::class, 'general_user_id');
    }
    public function afac001aBrand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function afac001aModel()
    {
        return $this->belongsTo(aModel::class, 'amodel_id');
    }
    public function afac001aPlaceOrigen()
    {
        return $this->belongsTo(Place::class, 'place_origen_id');
    }
    public function afac001aPlaceDestination()
    {
        return $this->belongsTo(Place::class, 'place_destination_id');
    }
    public function afac001aBaseOperation()
    {
        return $this->belongsTo(BaseOperation::class, 'base_operation_id');
    }
    public function afac001aNationalityPassengers()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_passengers_id');
    }
    public function afac001aNationalityCommander()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_commander_id');
    }
    public function afac001aNationalityOficial()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_oficial_id');
    }
}
