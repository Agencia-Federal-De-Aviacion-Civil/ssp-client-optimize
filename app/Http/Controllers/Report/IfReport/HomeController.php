<?php

namespace App\Http\Controllers\Report\IfReport;

use App\Http\Controllers\Controller;
use App\Models\User\GeneralUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($slug, $id)
    {
        $users = GeneralUser::where('id', $id)->get();
        return view('report.ifView.dashboard', compact('users'));
    }
}
