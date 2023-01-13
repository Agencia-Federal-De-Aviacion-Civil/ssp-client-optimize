<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
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
}
