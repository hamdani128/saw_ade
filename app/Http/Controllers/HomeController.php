<?php

namespace App\Http\Controllers;

use App\saw\Alternatif;
use App\saw\Assesment;
use App\saw\Criteria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function dashboard()
    {
        $alternatif = Alternatif::get()->count();
        $kriteria = Criteria::get()->count();
        $penilaian = Assesment::get()->count();
        return view('pages.dashboard', compact('alternatif', 'kriteria', 'penilaian'));
    }
}
