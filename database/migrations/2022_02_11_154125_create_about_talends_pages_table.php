<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTalendsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_talends_page', function (Blueprint $table) {
            $table->id();

            $table->string('page_type')->nullable();

            $table->text('banner_description')->nullable();
            $table->string('about_talends_image')->nullable();

            $table->text('features_text')->nullable();
            $table->text('services_description')->nullable();

            $table->text('project_description')->nullable();
            $table->string('talends_project_image')->nullable();

            $table->text('work_description')->nullable();
            $table->string('talends_work_image')->nullable();


            $table->text('payment_description')->nullable();
            $table->string('talends_payment_image')->nullable();


            
            $table->text('support_description')->nullable();
            $table->string('talends_support_image')->nullable();

            $table->text('freelancer_benefits')->nullable();
            $table->text('internees_benefits')->nullable();


            $table->text('agencies_benefits')->nullable();
            $table->text('government_benefits')->nullable();


            $table->string('short_term_project_image')->nullable();
            $table->string('recurring_engagements_image')->nullable();
            $table->string('long_term_work_image')->nullable();

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
        Schema::dropIfExists('about_talends_pages');
    }
}
