<?php

namespace App\Http\Livewire\Report\IfView\Daaia001;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.report.if-view.daaia001.create')
            ->extends('layouts.app')
            ->section('content');
    }
}
