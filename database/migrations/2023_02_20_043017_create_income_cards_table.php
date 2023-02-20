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
        Schema::create('income_cards', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('card_number');
            $table->tinyInteger('credit_by');
            $table->tinyInteger('credit_for');
            $table->tinyInteger('currency');
            $table->double('amount');
            $table->date('date');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('income_cards');
    }
};