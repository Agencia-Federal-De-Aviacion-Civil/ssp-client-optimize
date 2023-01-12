<?php

namespace App\Models\Catalogue;

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
}
