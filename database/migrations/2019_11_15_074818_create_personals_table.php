<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nid');
            $table->string('passport',25)->nullable();
            $table->boolean('dl')->nullable();
            $table->date('dob');
            $table->string('gender',25);
            $table->string('father',100);
            $table->string('mother',100);
            $table->string('gurrantor',100);
            $table->string('maritalstatus',100);
            $table->string('spouse',100)->nullable();
            $table->tinyInteger('children')->nullable();
            $table->string('presentaddress');
            $table->string('permanentaddress');
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
        Schema::dropIfExists('personals');
    }
}
