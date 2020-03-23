<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('roll_no')->nullable();
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('phone');
            $table->string('email');
            $table->string('dob');
            $table->unsignedInteger('class_id');
            $table->string('section')->nullable();
            $table->string('address');
            $table->string('username');
            $table->string('password')->default(Hash::make('basicenglishschool'));
            $table->string('images');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
