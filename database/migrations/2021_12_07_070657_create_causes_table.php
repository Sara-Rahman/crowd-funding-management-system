<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
           
            $table->string('name');
            $table->string('category_id');
            $table->string('details');
            $table->string('location');
            $table->double('phn_number');
            $table->double('amount');
            $table->double('raised_amount')->nullable();
           
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
        Schema::dropIfExists('causes');
    }
}
