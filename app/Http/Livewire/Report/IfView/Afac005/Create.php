<?php

namespace App\Http\Livewire\Report\IfView\Afac005;

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
        return view('livewire.report.if-view.Afac005.create')
            ->extends('layouts.app')
            ->section('content');
    }
    public function print()
    {
        //$id = $this->afac001aid->id;
        return redirect()->route('afac005-pdf');
    }
    public function PdfAfac005()
    {

        $pdf = PDF::loadView('report.ifView.afac005.pdf.afac005-pdf');
        return $pdf->download('reporte_No_'.'.pdf');
    }
   
}
