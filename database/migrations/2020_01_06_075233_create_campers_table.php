<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('firstName');
            $table->string('nameOfParents');
            $table->string('parentContact');
            $table->string('area');
            $table->string('zone');
            // $table->string('parish');
            $table->string('gender');
            $table->string('passport');
            $table->string('dob');
            $table->mediumText('allergies')->nullable();
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
        Schema::dropIfExists('campers');
    }
}