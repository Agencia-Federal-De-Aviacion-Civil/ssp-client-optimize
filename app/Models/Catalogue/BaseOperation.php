<?php

namespace App\Models\Catalogue;

use App\Models\Report\Afac001;
use App\Models\Report\Afac001a;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseOperation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function baseOperationAfac001()
    {
        return $this->hasMany(Afac001::class);
    }
    public function baseOperationAfac001a()
    {
        return $this->hasMany(Afac001a::class);
    }
}
