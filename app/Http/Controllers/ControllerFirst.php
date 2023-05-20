<?php

namespace App\Http\Controllers;

use App\Models\ModuleFirst;
use Illuminate\Http\Request;

class ControllerFirst extends Controller
{
    //INSERT INTO metro_Manila_City (Uniqueid) VALUES (SUBSTR(REPLACE(UUID(), '-', ''), 1, 16));
    public function dashv(ModuleFirst $objModel){
        $mParam['title'] = 'First Read';
        $mParam['data'] = $objModel->dashvoi();
        return view('layouts.flopView', $mParam);
    }
    public function docu(ModuleFirst $objModel){
        $mParam['title'] = 'First Read';
        $mParam['data'] = $objModel->dashvoi();
        return view('layouts.dashvv', $mParam);
    }

    public function dashboard()
    {
        echo 'flop dashboard';
    }

    public function slug($ss)
    {
        echo $ss.' flop slug ';
    }

    public function sluggy($ss, $sss, $ssss, $sssss, $ssssss)
    {
        echo $ss.' flop slug '.$sss.' space '.$ssss.' space '.$sssss.' space '.$ssssss;
    }

    public function flopView()
    {
        return view('layouts.flopView');
    }

    
    public function flopYield()
    {
        return view('layouts.flopLayoutYield');
    }

    public function inYield()
    {
        return view('flopYield');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ModuleFirst $moduleFirst)
    {
        $DAta = [
            'CityName' => $request->CityName,
            'CityMayor' => $request->CityMayor,
            'CityPostalCode' => $request->CityPostalCode,
        ];
        // print_r($DAta);
        // return;
        
        $mParam= $moduleFirst->put($DAta);
        echo $mParam;

    }

    /**
     * Display the specified resource.
     */
    public function show(ModuleFirst $moduleFirst)
    {
        $mParam = $moduleFirst->readall();

        return $mParam;

    }
    public function showSelect(ModuleFirst $moduleFirst)
    {
        //
    }

    public function read(Request $request, ModuleFirst $moduleFirst)
    {
        $mParam= $moduleFirst->read($request->Uniqueid);
        return $mParam;
    }
    
    public function readSel($UID, ModuleFirst $moduleFirst)
    {
        $mParam= $moduleFirst->read($UID);
        return $mParam;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function manipulate(Request $request, ModuleFirst $moduleFirst){
        $DAta = [
            'Uniqueid' => $request->Uniqueid,
            'CityName' => $request->CityName,
            'CityMayor' => $request->CityMayor,
            'CityPostalCode' => $request->CityPostalCode,
        ];

        $mParam= $moduleFirst->manipulate($DAta);
        return $mParam;
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuleFirst $moduleFirst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($UID, ModuleFirst $moduleFirst)
    {
        $mParam= $moduleFirst->remcity($UID);
        return $mParam;

    }
}
