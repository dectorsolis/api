<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\zipcodes;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $txt_zipcodes = fopen( public_path("data/zipcodes.txt"), "r"); 

        while( $row = fgetcsv( $txt_zipcodes, 2000, "|" ) ){
            zipcodes::create([
                'zipcode'               => $row[0],
                'settlement_name'       => $this->sanitize_data( $row[1] ),
                'settlement_type'       => $this->sanitize_data( $row[2] ),
                'municipality_name'     => $this->sanitize_data( $row[3] ),
                'federal_entity'        => $this->sanitize_data( $row[4] ),
                'city_name'             => $this->sanitize_data( $row[5] ),
                'd_cp'                  => $row[6],
                'federal_entity_key'    => $row[7],
                'c_oficina'             => $row[8],
                'settlement_type_key'   => $row[10],
                'municipality_key'      => $row[11],
                'settlement_municipality_id'    => $row[12],
                'zone_type'             => $this->sanitize_data( $row[13] ),
                'city_key'              => $row[14],
            ]);
        }

        fclose( $txt_zipcodes );
    }

    public function sanitize_data( $str ){
        $accents = array('á','é','í','ó','ú','Á','É','Í','Ó','Ú');
        $letters = array('a','e','i','o','u','A','E','I','O','U');        
        return strtoupper( str_replace( $accents, $letters, $str ) );
    }
}
