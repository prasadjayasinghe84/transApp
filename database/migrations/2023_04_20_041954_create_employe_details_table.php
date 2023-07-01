<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_details', function (Blueprint $table) {
            $table->id();
            $table->string('name_with_initials');
            $table->string('edit_name_with_initials');

        

            $table->string('name_other_language')->nullable();
            $table->string('edit_name_other_language')->nullable();

            $table->string('name_donoted_initials');
            $table->string('edit_name_donoted_initials');

            $table->string('nic')->unique();
            $table->string('edit_nic')->unique();

            $table->string('tel_number_mobile');
            $table->string('edit_tel_number_mobile');

            $table->string('tel_number_whatsapp');
            $table->string('edit_tel_number_whatsapp');

            $table->string('email');
            $table->string('edit_email');

            $table->date('date_of_birth');
            $table->date('edit_date_of_birth');

            $table->integer('age_year');
            $table->integer('edit_age_year');

            $table->integer('age_month');
            $table->integer('edit_age_month');

            $table->string('gender');
            $table->string('edit_gender');

            $table->string('civil_states');
            $table->string('edit_civil_states');

            $table->string('address_perment');
            $table->string('edit_address_perment');

            $table->string('address_temp')->nullable();
            $table->string('edit_address_temp')->nullable();

            $table->string('city')->nullable();
            $table->string('edit_city')->nullable();

            $table->unsignedBigInteger('dsd_id');
            $table->unsignedBigInteger('edit_dsd_id');

            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('edit_district_id');

            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('edit_province_id');


            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dsd_id')->references('id')->on('d_s_divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_details');
    }
};
