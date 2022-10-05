<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_page', function (Blueprint $table) {
            $table->id();
            $table->text('banner_description')->nullable();
            $table->string('government_image')->nullable();

            $table->text('content_description')->nullable();
            $table->string('content_image')->nullable();

            $table->text('opportunity_providers')->nullable();
            $table->text('opportunity_seekers')->nullable();
            $table->text('process')->nullable();
            $table->text('features_text')->nullable();
            $table->text('services_description')->nullable();
            
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
        Schema::dropIfExists('government_pages');
    }
}
