<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah')->nullable();
            $table->string('sekolah_img')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('logo')->nullable();
            $table->text('arti_logo')->nullable();
            $table->string('kepsek_img')->nullable();
            $table->string('kepsek_nama')->nullable();
            $table->string('wakepsek1_img')->nullable();
            $table->string('wakepsek1_nama')->nullable();
            $table->string('wakepsek2_img')->nullable();
            $table->string('wakepsek2_nama')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
