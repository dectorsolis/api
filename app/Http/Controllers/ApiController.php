<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zipcodes;

class ApiController extends Controller
{

    public function index(){
        echo "hello darling";
    }
    public function zipCodes( $code ){
        $data = [];
        $zipcodes = zipcodes::where( 'zipcode', $code )->get();
        
        if( $zipcodes->count() > 0 ){
            //return view('api.zipcodes',['zipcodes' => $zipcodes] );
            $data = [
                "zip_code" => $zipcodes->first()->zipcode,
                "locality" => $zipcodes->first()->city_name,
                "federal_entity" => [
                    "key"   => (int)$zipcodes->first()->federal_entity_key,
                    "name"  => $zipcodes->first()->federal_entity,
                    "code"  => null
                ],
                "settlements" => [],
                "municipality" => [
                    "key"   => (int)$zipcodes->first()->municipality_key,
                    "name"  => $zipcodes->first()->municipality_name
                ]
            ];   
             
            foreach( $zipcodes as $zipcode ){
                $data["settlements"][] = [
                    "key" => (int)$zipcode->settlement_municipality_id,
                    "name" => $zipcode->settlement_name,
                    "zone_type" => $zipcode->zone_type,
                    "settlement_type" => [ "name" => $zipcode->settlement_type ]
                ]; 
            }
            return $data;
        }
        
    }
}
