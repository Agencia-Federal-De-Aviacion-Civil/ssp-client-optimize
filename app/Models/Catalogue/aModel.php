<?php

namespace App\Models\Catalogue;

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
}
