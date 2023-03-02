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
        Schema::create('expense_cashes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->double('amount');
            $table->date('date');
            $table->unsignedBigInteger('expense_by_id');
            $table->tinyInteger('currency_id');
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
        Schema::dropIfExists('expense_cashes');
    }
};
