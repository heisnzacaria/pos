<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->String('name')->default('LCDOC');
            $table->integer('rc')->default('155267');
            $table->integer('patent')->default('25107199');
            $table->biginteger('ice')->default('0028968449000057');
            $table->integer('if')->default('50585010');
            $table->biginteger('phone')->default('212669692424');
            $table->text('address')->default('30 APPT nº08 RUE MOULAY AHMED LOUKILI HASSAN RABAT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};
