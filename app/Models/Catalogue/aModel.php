<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function amodelBrand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function aModelAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
}
