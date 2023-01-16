<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Jenssegers\Date\Date;

class banner extends Component
{

    public function __construct()
    {
        //
    }


    public function render()
    {
        Date::setlocale('es');
        $current = Date::now()->format('l j F Y');
        return view('components.banner', compact('current'));
    }
}
