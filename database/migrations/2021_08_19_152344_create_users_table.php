<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('legal_entity')->nullable();
            $table->text('name')->nullable();
            $table->text('surname')->nullable();
            $table->text('prefix')->nullable();
            $table->text('phone_number')->nullable();
            $table->date('birthday')->nullable();
            $table->text('email')->nullable();
            $table->text('password')->nullable();
            $table->text('via')->nullable();
            $table->text('city')->nullable();
            $table->text('cap')->nullable();            
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
        Schema::dropIfExists('users');
    }
}
