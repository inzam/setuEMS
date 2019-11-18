<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('officeID');
            $table->string('name');
            $table->string('bloodgroup');
            $table->integer('personalmobile');
            $table->integer('familymobile');
            $table->integer('gurrantormobile');
            $table->string('email');
            $table->string('extracurricular')->nullable();
            $table->string('eduquali');
            $table->string('lasteduresult')->nullable();
            $table->string('eduinstitute')->nullable();
            $table->integer('yearofpass')->nullable();
            $table->string('lastworkinginst')->nullable();
            $table->string('lastworkingdesig')->nullable();
            $table->integer('lastworkingduration')->nullable();
            $table->integer('similarexperience')->nullable();
            $table->string('pp')->nullable();
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
        Schema::dropIfExists('officials');
    }
}
