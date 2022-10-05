<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company_name');
            $table->text('detail')->nullable();
            $table->text('portfolio')->nullable();
            $table->string('team_detail')->nullable();
            $table->text('experience')->nullable();
            $table->text('technology_experience')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->integer('total_earned')->nullable();
            $table->integer('total_hours')->nullable();
            $table->integer('total_jobs')->nullable();
            $table->string('last_work_date')->nullable();
            $table->string('membership_date')->nullable();
            $table->string('office_location')->nullable();
            $table->text('work_history')->nullable();   
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
        Schema::dropIfExists('company_details');
    }
}
