<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin_dasboard.dasboard');
    }

    public function hub()
    {
        return view('admin_dasboard.datahubungin');
    }
}
