<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModuleFirst extends Model
{
    use HasFactory;

    // public function put($prop){
    //     $sQuery = DB::insert("INSERT INTO metro_Manila_City (Uniqueid, CityName, CityMayor, CityPostalCode) VALUES ((SUBSTR(REPLACE(UUID(), '-', ''), 1, 16)), ".$prop['CityName']."', '".$prop['CityMayor']."', '".$prop['CityPostalCode']."')");
    //     if($sQuery == true){
    //         return 'true';
    //     }else{
    //         return 'false';
    //     }    
    // }

    public function put($prop){
        $sQuery = DB::insert("INSERT INTO metro_Manila_City (Uniqueid, CityName, CityMayor, CityPostalCode) VALUES (SUBSTR(REPLACE(UUID(), '-', ''), 1, 16), '".$prop['CityName']."', '".$prop['CityMayor']."', '".$prop['CityPostalCode']."')");
        if ($sQuery == true) {
            return response()->json([
                'code' => 200,
                'status' => 'ok',
                'result' => 'Record added successfully'
            ], 200);
        }else{
            return response()->json([
                'code' => 300,
                'status' => 'null',
                'result' => 'Unable to add record'
            ],300);
        }
    }

    public function dashvoi(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');

        if($sQuery == true && sizeof($sQuery) > 0){
            return json_encode(
                [
                    'code' => 200,
                    'status' => 'ok',
                    'result' => $sQuery
                ]
            );
        }elseif($sQuery == true && sizeof($sQuery) == 0){
            return json_encode(
                [
                    'code' => 300,
                    'status' => 'ok',
                    'result' => 'City does not exist in the List'
                ]
            );
        }else{
            return json_encode(
                [
                    'code' => 400,
                    'status' => 'ok',
                    'result' => 'Something went wrong. Please contact the developer'
                ]
            );
        }
    }

    public function readall(){
        $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        if($sQuery == true && sizeof($sQuery) > 0){
            return json_encode(
                [
                    'code' => 200,
                    'status' => 'ok',
                    'result' => $sQuery
                ]
            );
        }elseif($sQuery == true && sizeof($sQuery) == 0){
            return json_encode(
                [
                    'code' => 300,
                    'status' => 'ok',
                    'result' => 'City does not exist in the List'
                ]
            );
        }else{
            return json_encode(
                [
                    'code' => 400,
                    'status' => 'ok',
                    'result' => 'Something went wrong. Please contact the developer'
                ]
            );
        }    }

    public function read($UID){
        if(empty($UID)){
            $sQuery = DB::select('SELECT * FROM metro_Manila_City');
        }else{
            $sQuery = DB::select('SELECT * FROM metro_Manila_City WHERE Uniqueid = "'.$UID.'"');
        }
        if($sQuery == true && sizeof($sQuery) > 0){
            return json_encode(
                [
                    'code' => 200,
                    'status' => 'ok',
                    'result' => $sQuery
                ]
            );
        }elseif($sQuery == true && sizeof($sQuery) == 0){
            return json_encode(
                [
                    'code' => 300,
                    'status' => 'ok',
                    'result' => 'City does not exist in the List'
                ]
            );
        }else{
            return json_encode(
                [
                    'code' => 400,
                    'status' => 'ok',
                    'result' => 'Something went wrong. Please contact the developer'
                ]
            );
        }
    }
    public function manipulate($prop){
        $sQuery = DB::update('UPDATE metro_Manila_City SET CityName = "'.$prop['CityName'].'", CityMayor = "'.$prop['CityMayor'].'", CityPostalCode = "'.$prop['CityPostalCode'].'" WHERE Uniqueid = "'.$prop['Uniqueid'].'"');
        return $sQuery;
    }

    public function remcity($prop){
        // $sQuery = DB::delete('delete '.$prop.' FROM metro_Manila_City WHERE Uniqueid = $PROP');
        
        $sQuery = DB::table('metro_Manila_City')->where('Uniqueid', $prop);
        $act = $sQuery->delete();
        if ($act) {
            return response()->json([
                'code' => 200,
                'status' => 'ok',
                'result' => 'City deleted successfully'
            ], 200);
        }else{
            return response()->json([
                'code' => 300,
                'status' => 'null',
                'result' => 'Cant find record to delete'
            ],300);
        }


        // if($sQuery == true){
        //     return true;
        // }else{
        //     return false;
        // }
        
    }

}
