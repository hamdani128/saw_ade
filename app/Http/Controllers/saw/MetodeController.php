<?php

namespace App\Http\Controllers\saw;

use App\Http\Controllers\Controller;
use App\saw\Assesment;
use App\saw\Criteria;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Assesment::get();
        $K1 = Assesment::max('nilai1');
        $K2 = Assesment::max('nilai2');
        $K3 = Assesment::max('nilai3');
        $K4 = Assesment::max('nilai4');
        $K5 = Assesment::max('nilai5');
        $K6 = Assesment::max('nilai6');
        $K7 = Assesment::min('nilai7');
        $K8 = Assesment::min('nilai8');
        $K9 = Assesment::max('nilai9');
        $K10 = Assesment::max('nilai10');
        $K11 = Assesment::min('nilai11');
        $K12 = Assesment::max('nilai12');
        $K13 = Assesment::max('nilai13');
        $K14 = Assesment::max('nilai14');
        $B1 = Criteria::where('kode', 'K1')->value('bobot');
        $B2 = Criteria::where('kode', 'K2')->value('bobot');
        $B3 = Criteria::where('kode', 'K3')->value('bobot');
        $B4 = Criteria::where('kode', 'K4')->value('bobot');
        $B5 = Criteria::where('kode', 'K5')->value('bobot');
        $B6 = Criteria::where('kode', 'K6')->value('bobot');
        $B7 = Criteria::where('kode', 'K7')->value('bobot');
        $B8 = Criteria::where('kode', 'K8')->value('bobot');
        $B9 = Criteria::where('kode', 'K9')->value('bobot');
        $B10 = Criteria::where('kode', 'K10')->value('bobot');
        $B11 = Criteria::where('kode', 'K11')->value('bobot');
        $B12 = Criteria::where('kode', 'K12')->value('bobot');
        $B13 = Criteria::where('kode', 'K13')->value('bobot');
        $B14 = Criteria::where('kode', 'K14')->value('bobot');
        
        $N1 = Assesment::value('nilai1');
        $N2 = Assesment::value('nilai2');
        $N3 = Assesment::value('nilai3');
        $N4 = Assesment::value('nilai4');
        $N5 = Assesment::value('nilai5');
        $N6 = Assesment::value('nilai6');
        $N7 = Assesment::value('nilai7');
        $N8 = Assesment::value('nilai8');
        $N9 = Assesment::value('nilai9');
        $N10 = Assesment::value('nilai10');
        $N11 = Assesment::value('nilai11');
        $N12 = Assesment::value('nilai12');
        $N13 = Assesment::value('nilai13');
        $N14 = Assesment::value('nilai14');

        $S1 = ($N1/$K1) * $B1; 
        $S2 = ($N2/$K2) * $B2; 
        $S3 = ($N3/$K3) * $B3; 
        $S4 = ($N4/$K4) * $B4; 
        $S5 = ($N5/$K5) * $B5; 
        $S6 = ($N6/$K6) * $B6; 
        $S7 = ($N7/$K7) * $B7; 
        $S8 = ($N8/$K8) * $B8; 
        $S9 = ($N9/$K9) * $B9; 
        $S10 = ($N10/$K10) * $B10; 
        $S11 = ($N11/$K11) * $B11; 
        $S12 = ($N12/$K12) * $B12; 
        $S13 = ($N13/$K13) * $B13; 
        $S14 = ($N14/$K14) * $B14; 

        // $V1 = $S1 + $S2 + $S3 + $S4 + $S5 + $S6 + $S7 + $S8 + $S9 + $S10 + $S11 + $S12 + $S13 + $S14; 
        // if ($V1 < 80){
        //     $hasil = "-";
        // }else if($V1 > 80){
        //     $hasil = "Terbaik"; 
        // }else if ($V1 > 100){
        //     $hasil = "Sangat Terbaik";
        // }
        return view('pages.metode', compact('data','K1','K2','K3','K4','K5','K6','K7','K8','K9','K10','K11','K12','K13','K14',
        'B1', 'B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','B13','B14'));
        // return $hasil;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
