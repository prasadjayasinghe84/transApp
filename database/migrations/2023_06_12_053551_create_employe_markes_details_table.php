<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe_markes_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_details_id');
            $table->integer('mark_a');
            $table->integer('edit_mark_a');

            $table->integer('mark_b_1');
            $table->integer('edit_mark_b_1');

            $table->integer('mark_b_2');
            $table->integer('edit_mark_b_2');

            $table->integer('mark_b_3');
            $table->integer('edit_mark_b_3');

            $table->integer('mark_c');
            $table->integer('edit_mark_c');

            $table->integer('mark_d');
            $table->integer('edit_mark_d');

            $table->integer('mark_tot');
            $table->integer('edit_mark_tot');

            $table->foreign('employe_details_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employe_markes_details');
    }
};
