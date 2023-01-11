<?php

namespace App\Http\Livewire\Dashboard\Register;

use App\Models\Catalogue\KindPeople;
use App\Models\User\GeneralUser;
use Livewire\Component;

class Create extends Component
{
    public $name, $apPaterno, $apMaterno, $email, $telephone, $extention, $enterprise, $typePeople, $id_user, $id_generalUser;
    protected $rules = [
        'name' => 'required',
        'apPaterno' => 'required',
        'apMaterno' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'enterprise' => 'required',
        'typePeople' => 'required'
    ];
    public function mount()
    {
        $this->peoples = KindPeople::all();
    }
    public function render()
    {
        return view('livewire.dashboard.register.create');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function clean()
    {
        $this->reset([
            'name',
            'apPaterno',
            'apMaterno',
            'email',
            'telephone',
            'extention',
            'enterprise',
            'typePeople'
        ]);
    }
    public function save()
    {
        $this->validate();
        $this->id_user = GeneralUser::updateOrCreate(
            ['id' => $this->id_generalUser],
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
        $this->clean();
    }
}
