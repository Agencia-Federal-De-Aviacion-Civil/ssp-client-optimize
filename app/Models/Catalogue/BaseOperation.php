<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseOperation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
