<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transer_request_reasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_details_id');
            $table->unsignedBigInteger('reasons_id');
            $table->string('other')->nullable();
            $table->foreign('employe_details_id')->references('id')->on('employe_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('reasons_id')->references('id')->on('reasons')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transer_request_reasons');
    }
};
