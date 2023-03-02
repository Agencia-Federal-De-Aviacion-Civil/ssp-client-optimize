<?php

namespace App\Http\Livewire\Report\NoView;

use App\Models\User\GeneralUser;
use Livewire\Component;

class Menu extends Component
{
    public $id_user, $userData;
    public function mount($id_user)
    {
        $this->id_user = $id_user;
        $this->userData = GeneralUser::where('id', $this->id_user)->get();
    }
    public function render()
    {
        return view('livewire.report.no-view.menu')
            ->extends('layouts.app')
            ->section('content');
    }
}
