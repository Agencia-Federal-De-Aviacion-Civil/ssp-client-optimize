<?php

namespace App\Http\Livewire\Report\IfView\Avs0102;

use App\Models\Catalogue\aModel;
use App\Models\Catalogue\BaseOperation;
use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Nacionality;
use App\Models\Catalogue\Place;
use Livewire\Component;
use WireUi\Traits\Actions;
use PDF;
class Create extends Component
{
    use Actions;
    
    public function render()
    {
        return view('livewire.report.if-view.Avs0102.create')
            ->extends('layouts.app')
            ->section('content');
    }
   
}
