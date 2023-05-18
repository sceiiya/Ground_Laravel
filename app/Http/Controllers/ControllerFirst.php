<?php

namespace App\Http\Controllers;

use App\Models\ModuleFirst;
use Illuminate\Http\Request;

class ControllerFirst extends Controller
{

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuleFirst $moduleFirst)
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
