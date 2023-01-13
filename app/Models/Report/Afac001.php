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

class Afac001 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function  afac001GeneralUser()
    {
        return $this->belongsTo(GeneralUser::class, 'general_user_id');
    }
    public function afac001Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function afac001Model()
    {
        return $this->belongsTo(aModel::class, 'amodel_id');
    }
    public function afac001PlaceOrigen()
    {
        return $this->belongsTo(Place::class, 'place_origen_id');
    }
    public function afac001PlaceDestination()
    {
        return $this->belongsTo(Place::class, 'place_destination_id');
    }
    public function afac001BaseOperation()
    {
        return $this->belongsTo(BaseOperation::class, 'base_operation_id');
    }
    public function afac001NationalityPassengers()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_passengers_id');
    }
    public function afac001NationalityCommander()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_commander_id');
    }
    public function afac001NationalityOficial()
    {
        return $this->belongsTo(Nacionality::class, 'nationality_oficial_id');
    }
}
