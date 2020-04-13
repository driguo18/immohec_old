<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('property_type_id');
            $table->unsignedInteger('category_id');
            $table->string('name'); //Example: M. ; Mme; Mlle
            $table->string('slug');
            $table->string('city');
            $table->string('locality');
            $table->string('surface');
            $table->string('pieces_number');
            $table->string('price');
            $table->string('caution');
            $table->text('description');
            $table->unsignedInteger('client_id');
            $table->string('status');
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
        Schema::dropIfExists('properties');
    }
}
