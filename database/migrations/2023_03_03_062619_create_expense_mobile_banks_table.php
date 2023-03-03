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
        Schema::create('expense_mobile_banks', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->date('date');
            $table->string('amount');
            $table->tinyInteger('currency_id');
            $table->bigInteger('expense_by_id');
            $table->unsignedBigInteger('mobile_bank_id');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('mobile_bank_id')->references('id')->on('expense_mobile_banks')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_mobile_banks');
    }
};
