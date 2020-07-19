<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_alternatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id');
            $table->string('jlh_project_manager')->nullable();
            $table->string('jlh_site_manager')->nullable();
            $table->string('jlh_supervisor')->nullable();
            $table->string('jlh_waspang')->nullable();
            $table->string('jlh_teknisi')->nullable();
            $table->string('jlh_labor')->nullable();
            $table->string('total_karyawan')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('detail_alternatifs');
    }
}
