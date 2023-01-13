<?php

namespace App\Models\Report;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\Brand;
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
}
