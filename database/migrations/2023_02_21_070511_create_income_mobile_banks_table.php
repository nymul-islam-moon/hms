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
        Schema::create('income_mobile_banks', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->unsignedBigInteger('mobile_bank_id');
            $table->tinyInteger('currency');
            $table->tinyInteger('cash_in_for');
            $table->double('amount');
            $table->date('date');
            $table->string('cash_in_by_name');
            $table->string('cash_in_by_phone');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('mobile_bank_id')->references('id')->on('mobile_banks')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_mobile_banks');
    }
};
