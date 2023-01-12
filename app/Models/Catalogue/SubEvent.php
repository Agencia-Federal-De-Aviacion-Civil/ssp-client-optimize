<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubEvent extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function subEventEvent()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
