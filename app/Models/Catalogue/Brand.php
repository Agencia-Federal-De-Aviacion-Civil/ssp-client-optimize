<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
use App\Models\Report\Afac001a;
use App\Models\Report\Afac0102;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function brandType()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function brandAmodel()
    {
        return $this->hasMany(aModel::class);
    }
    public function brandAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function brandAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
    public function brandAfac0102()
    {
        return $this->hasMany(Afac0102::class);
    }    
}
