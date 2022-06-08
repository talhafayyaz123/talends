<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHireAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_agency', function (Blueprint $table) {
            $table->id();
            $table->integer('agency_id');
            $table->string('full_name')->nullable();   
            $table->string('company_name')->nullable();   
            $table->string('email')->nullable();   
            $table->string('phone_number')->nullable();   
            $table->text('detail')->nullable();
            $table->string('budget')->nullable();   
   
            $table->integer('is_seen')->default(0);   
            $table->text('questions')->nullable();   
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
        Schema::dropIfExists('hire_agencies');
    }
}
