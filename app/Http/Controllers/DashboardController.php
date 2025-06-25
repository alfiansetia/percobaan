<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $class = config('other.kelas');
        $mapel = config('other.mapel');

        return view('dashboard.index', compact(['class', 'mapel']));
    }
}
