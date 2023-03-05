<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGYMProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_y_m_projects', function (Blueprint $table) {
            $table->id();
        

            $table->string('name');
            $table->string('email')->unique();
            $table->integer('number');
            $table->enum('gender',['M','F','o']);
            $table->string('state');
            $table->date('dob');
            $table->string('Address');

            $table->string('password');
            $table->string('Cpassword');

            
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
        Schema::dropIfExists('g_y_m_projects');
    }
}
