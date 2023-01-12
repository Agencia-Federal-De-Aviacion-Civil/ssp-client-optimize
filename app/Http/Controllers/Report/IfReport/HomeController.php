<?php

namespace App\Http\Controllers\Report\IfReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('report.ifView.dashboard');
    }
}
