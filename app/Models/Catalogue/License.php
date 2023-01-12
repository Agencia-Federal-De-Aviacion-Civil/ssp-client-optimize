<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function licenseTypeLicense()
    {
        return $this->hasMany(LicenseType::class);
    }
}
