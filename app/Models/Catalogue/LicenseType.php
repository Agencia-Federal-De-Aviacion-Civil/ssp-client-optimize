<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function typeLicenseLicense()
    {
        return $this->belongsTo(License::class, 'license_id');
    }
}
