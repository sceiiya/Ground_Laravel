<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ModuleFirst extends Model
{
    use HasFactory;

    public function dashvoi(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        return $sQuery;
    }

    public function readall(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        return $sQuery;
    }

    public function read(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        return $sQuery;
    }
    public function edit(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        return $sQuery;
    }

    public function delete(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        return $sQuery;
    }

}
