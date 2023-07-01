<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sub_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_unit_id');
            $table->string('section_name');
            $table->string('section_short')->nullable();
            $table->string('address')->nullable();
            $table->foreign('sub_unit_id')->references('id')->on('sub_unit_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_sections');
    }
};
