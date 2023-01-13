<?php

namespace App\Models\User;

use App\Models\Report\Afac001;
use App\Models\Report\Afac001a;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralUser extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function generalUserAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function generalUserAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
}
