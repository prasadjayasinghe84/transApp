<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_work_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_detail_id');

            $table->unsignedBigInteger('salary_code_id');
            $table->unsignedBigInteger('edit_salary_code_id');

            $table->unsignedBigInteger('designation_id');
            $table->unsignedBigInteger('edit_designation_id');

            $table->string('class');
            $table->string('edit_class');

            $table->string('appoiment_number')->nullable();
            $table->string('edit_appoiment_number')->nullable();;

            $table->date('appoiment_date');
            $table->date('edit_appoiment_date');

            $table->unsignedBigInteger('director_section_id');
            $table->unsignedBigInteger('edit_director_section_id');

            $table->unsignedBigInteger('sub_unit_section_id');
            $table->unsignedBigInteger('edit_sub_unit_section_id');

            $table->unsignedBigInteger('sub_section_id');
            $table->unsignedBigInteger('edit_sub_section_id');

            $table->string('land_phone')->nullable();;
            $table->string('edit_land_phone')->nullable();;

            $table->string('fax')->nullable();;
            $table->string('edit_fax')->nullable();;

            $table->string('email')->nullable();;
            $table->string('edit_email')->nullable();;


            $table->date('appoiment_date_agri_department');
            $table->date('edit_appoiment_date_agri_department');

            $table->date('date_appoint_current_work');
            $table->date('edit_date_appoint_current_work');

            $table->string('period_appoint_current_work_year');
            $table->string('edit_period_appoint_current_work_year');

            $table->string('period_appoint_current_work_month');
            $table->string('edit_period_appoint_current_work_month');

            $table->foreign('employe_detail_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('salary_code_id')->references('id')->on('salary_codes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('director_section_id')->references('id')->on('director_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_unit_section_id')->references('id')->on('sub_unit_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_section_id')->references('id')->on('sub_sections')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_work_details');
    }
};
