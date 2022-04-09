<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->id();
            $table->string('zipcode');
            $table->string('settlement_name');
            $table->string('settlement_type');
            $table->string('municipality_name');
            $table->string('federal_entity');
            $table->string('city_name');
            $table->string('d_cp')->nullable();
            $table->string('federal_entity_key');
            $table->string('c_oficina')->nullable();
            $table->string('settlement_type_key')->nullable();
            $table->string('municipality_key');
            $table->string('settlement_municipality_id');
            $table->string('zone_type')->nullable();
            $table->string('city_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
};
