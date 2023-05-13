<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_locator', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('status');
            $table->text('logo');
            $table->string('address');
            $table->string('website');
            $table->string('phone');
            $table->string('countries_covered')->nullable();
            $table->string('states_covered')->nullable();
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
        Schema::dropIfExists('partner_locator');
    }
};
