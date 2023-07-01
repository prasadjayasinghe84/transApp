<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sub_unit_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('director_sections_id');
            $table->string('sub_name');
            $table->string('sub_short')->nullable();
            $table->string('address')->nullable();
            $table->foreign('director_sections_id')->references('id')->on('director_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_unit_sections');
    }
};
