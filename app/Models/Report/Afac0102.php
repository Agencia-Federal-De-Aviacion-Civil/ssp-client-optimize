<?php

namespace App\Models\Report;

use App\Models\Catalogue\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afac0102 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function afac0102Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }        
}
