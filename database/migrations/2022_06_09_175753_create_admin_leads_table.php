<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_leads', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('email')->nullable();
            $table->string('full_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('admin_leads');
    }
}
