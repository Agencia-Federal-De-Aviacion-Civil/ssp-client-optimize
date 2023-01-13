<?php

namespace App\Http\Controllers\Report\IfReport;

use App\Http\Controllers\Controller;
use App\Models\User\GeneralUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($slug, $idReporter)
    {
        $users = GeneralUser::where('id', $idReporter)->get();
        $id = $users[0]->id;
        return view('report.ifView.dashboard', compact('slug','idReporter','users'));
    }
}
