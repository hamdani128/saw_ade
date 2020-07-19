<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id');
            $table->string('c1');
            $table->integer('nilai1');
            $table->string('c2');
            $table->integer('nilai2');
            $table->string('c3');
            $table->integer('nilai3');
            $table->string('c4');
            $table->integer('nilai4');
            $table->string('c5');
            $table->integer('nilai5');
            $table->string('c6');
            $table->integer('nilai6');
            $table->string('c7');
            $table->integer('nilai7');
            $table->string('c8');
            $table->integer('nilai8');
            $table->string('c9');
            $table->integer('nilai9');
            $table->string('c10');
            $table->integer('nilai10');
            $table->string('c11');
            $table->integer('nilai11');
            $table->string('c12');
            $table->integer('nilai12');
            $table->string('c13');
            $table->integer('nilai13');
            $table->string('c14');
            $table->integer('nilai14');
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
        Schema::dropIfExists('assesments');
    }
}
