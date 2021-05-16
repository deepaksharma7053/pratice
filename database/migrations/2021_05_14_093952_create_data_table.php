<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            // $table->id();
                $table->increments('user_id');
                $table->text('name')->nullable();
                $table->string('father_name')->nullable();
                $table->integer('age')->nullable();
                $table->string('gender')->nullable();
                $table->string('hobbies')->nullable();
                $table->string('email')->unique()->nullable();
                $table->date('dob')->nullable();
                $table->binary('photo')->nullable();
                $table->text('password')->nullable();
                // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
