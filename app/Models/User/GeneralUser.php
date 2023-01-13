<?php

namespace App\Models\User;

use App\Models\Report\Afac001;
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
}
