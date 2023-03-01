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
        Schema::create('expense_cards', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->bigInteger('card_id');
            $table->bigInteger('expense_by_id');
            $table->bigInteger('currency');
            $table->string('amount');
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
        Schema::dropIfExists('expense_cards');
    }
};
