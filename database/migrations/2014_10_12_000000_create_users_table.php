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
            $table->string('name');
            $table->string('account')->unique();
            $table->string('password');
            $table->tinyInteger('role')->default(1);
            $table->date('date_of_birth')->nullable();
            $table->string('person_id')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('salary')->default(0);
            $table->rememberToken();
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
