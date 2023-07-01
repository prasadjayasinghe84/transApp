<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('g_n_divisions', function (Blueprint $table) {
            $table->id();
            $table->string('gnd_code');
            $table->string('dsd_name');
            $table->string('name');
            $table->string('climate_zone');
            $table->unsignedBigInteger('d_s_division_id');
            $table->foreign('d_s_division_id')->references('id')->on('d_s_divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('g_n_divisions');
    }
};
