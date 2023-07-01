<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_service_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_details_id');
            
            $table->unsignedBigInteger('director_section_id');
            $table->unsignedBigInteger('edit_director_section_id');

            $table->unsignedBigInteger('sub_unit_section_id');
            $table->unsignedBigInteger('edit_sub_unit_section_id');

            $table->unsignedBigInteger('sub_section_id');
            $table->unsignedBigInteger('edit_sub_section_id');

           

            $table->date('r_from');
            $table->date('edit_r_from');

            $table->date('r_to');
            $table->date('edit_r_to');

            $table->integer('period');
            $table->integer('edit_period');
            
            $table->foreign('employe_details_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('director_section_id')->references('id')->on('director_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_unit_section_id')->references('id')->on('sub_unit_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_section_id')->references('id')->on('sub_sections')->onDelete('cascade')->onUpdate('cascade');
          
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_service_records');
    }
};
