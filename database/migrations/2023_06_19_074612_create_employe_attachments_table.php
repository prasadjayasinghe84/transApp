<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_details_id');

            $table->unsignedBigInteger('f_director_section_id');
            $table->unsignedBigInteger('edit_f_director_section_id');

            $table->unsignedBigInteger('f_sub_unit_section_id');
            $table->unsignedBigInteger('edit_f_sub_unit_section_id');

            $table->unsignedBigInteger('f_sub_section_id');
            $table->unsignedBigInteger('edit_f_sub_section_id');
        
            $table->unsignedBigInteger('a_director_section_id');
            $table->unsignedBigInteger('edit_a_director_section_id');

            $table->unsignedBigInteger('a_sub_unit_section_id');
            $table->unsignedBigInteger('edit_a_sub_unit_section_id');

            $table->unsignedBigInteger('a_sub_section_id');
            $table->unsignedBigInteger('edit_a_sub_section_id');

            $table->date('r_from');
            $table->date('edit_r_from');

            $table->date('r_to');
            $table->date('edit_r_to');

            $table->integer('period');
            $table->integer('edit_period');
            
            $table->foreign('employe_details_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('f_director_section_id')->references('id')->on('director_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('f_sub_unit_section_id')->references('id')->on('sub_unit_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('f_sub_section_id')->references('id')->on('sub_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('a_director_section_id')->references('id')->on('director_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('a_sub_unit_section_id')->references('id')->on('sub_unit_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('a_sub_section_id')->references('id')->on('sub_sections')->onDelete('cascade')->onUpdate('cascade');
         
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_attachments');
    }
};
