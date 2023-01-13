<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
use App\Models\Report\Afac001a;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionality extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function nationalityPassengersAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function nationalityCommanderAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function nationalityOficialAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function nationalityPassengersAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
    public function nationalityCommanderAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
    public function nationalityOficialAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
}
