<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_family_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_details_id');
            $table->string('full_name');
            $table->string('edit_full_name');

            $table->string('relationship');
            $table->string('edit_relationship');

            $table->string('family_nic')->nullable();
            $table->string('edit_family_nic')->nullable();

            $table->date('date_of_birth');
            $table->date('edit_date_of_birth');

            $table->string('work_place')->nullable();
            $table->string('edit_work_place')->nullable();

            $table->string('designation')->nullable();
            $table->string('edit_designation')->nullable();

            $table->foreign('employe_details_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_family_details');
    }
};
