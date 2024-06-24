<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_expertise', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->longText('description');

            $table->longText('portfolio_detail');
            $table->string('portfolio_image');


            $table->longText('portfolio_detail_2');
            $table->string('portfolio_image_2');


            $table->longText('portfolio_detail_3');
            $table->string('portfolio_image_3');


            $table->longText('portfolio_detail_4');
            $table->string('portfolio_image_4');


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
        Schema::dropIfExists('company_expertise');
    }
}
