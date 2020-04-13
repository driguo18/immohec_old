<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('civility',30)->nullable(); //Example: M. ; Mme; Mlle
            $table->string('firstname');
            $table->string('lastname');
            $table->string('slug');
            $table->string('cni_number')->unique();
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone_number');
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
        Schema::dropIfExists('clients');
    }
}
