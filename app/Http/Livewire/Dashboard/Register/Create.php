<?php

namespace App\Http\Livewire\Dashboard\Register;

use App\Models\User\GenerarlUser;
use Livewire\Component;

class Create extends Component
{
    protected $rules = [
        'name' => 'required',
        'apPaterno' => 'required',
        'apMaterno' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'typePeople' => 'required'
    ];
    public $name, $apPaterno, $apMaterno, $email, $telephone, $extention, $enterprise, $typePeople, $id_user, $id_generalUser;
    public function render()
    {
        return view('livewire.dashboard.register.create');
    }
    public function save()
    {
        $this->validate();
        $this->id_user = GenerarlUser::updateOrCreate(
            ['id' => $this->id_userReporter],
            [
                'name' => $this->name,
                'apPaterno' => $this->apPaterno,
                'apMaterno' => $this->apMaterno, //DEJANDOLOS VACIOS LOS LIMPIARA AUTOMATICAMENTE
                'email' => $this->email,
                'telephone' => $this->telephone,
                'extention' => $this->extention,
                'enterprise' => $this->enterprise,
                'typePeople' => $this->typePeople,

            ],
        );
    }
}
