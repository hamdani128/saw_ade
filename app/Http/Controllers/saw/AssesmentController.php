<?php

namespace App\Http\Controllers\saw;

use App\Http\Controllers\Controller;
use App\saw\Alternatif;
use App\saw\Assesment;
use App\saw\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::all();
        $pen1 = ['Sangat Setuju','Setuju','Cukup Setuju','Kurang Setuju','Tidak Setuju'];
        $pen2 = ['Tidak Pernah','1 Kali','2 Kali','3 Kali','> 3 Kali'];
        $pen3 =['Sangat Baik','Baik','Cukup Baik','Kurang Baik','Tidak Baik'];
        $data = Assesment::get();
        $kriteria = Criteria::get();
        return view('pages.assesment', compact('alternatif', 'pen1', 'pen2', 'pen3', 'data', 'kriteria'));
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
        Auth::user()->assesments()->create($request->all());
        return back();
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
        $assesment = Assesment::find($id);
        $alternatif = Alternatif::get();
        $pen1 = ['Sangat Setuju','Setuju','Cukup Setuju','Kurang Setuju','Tidak Setuju'];
        $pen2 = ['Tidak Pernah','1 Kali','2 Kali','3 Kali','> 3 Kali'];
        $pen3 =['Sangat Baik','Baik','Cukup Baik','Kurang Baik','Tidak Baik'];
        return view('pages.edit.edit_assesment', compact('assesment','pen1', 'pen2', 'pen3', 'alternatif'));
        // return $assesment;
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
        $assesment = Assesment::find($id);
        $assesment->user_id = Auth::user()->id;
        $assesment->alternatif_id = $request->alternatif_id;
        $assesment->update($request->all());
        return redirect('/assesment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assesment = Assesment::find($id);
        $assesment->delete($assesment);
        return back();
    }
}
