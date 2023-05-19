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
    public function store(Request $request)
    {
        echo $request->CityName;
        echo $request->CityMayor;
        echo $request->CityPostalCode;
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuleFirst $moduleFirst)
    {
        $mParam['data'] = $moduleFirst->read();

        return $mParam;

    }
    public function showSelect(ModuleFirst $moduleFirst)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModuleFirst $moduleFirst)
    {
        //
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
    public function destroy(ModuleFirst $moduleFirst)
    {
        //
    }
}
