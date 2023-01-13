<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
use App\Models\Report\Afac001a;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function placeOrigenAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function placeDestinationAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function placeOrigenAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
    public function placeDestinationAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
}
