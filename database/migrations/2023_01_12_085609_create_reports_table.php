<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(1);
            $table->bigInteger('amount')->default(0);
            $table->text('note')->nullable();
            $table->unsignedBigInteger('employ_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('action')->nullable();
            $table->string('image')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('reports');
    }
}
