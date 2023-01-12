<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function stateMunicipal()
    {
        return $this->hasMany(Municipal::class);
    }
}
