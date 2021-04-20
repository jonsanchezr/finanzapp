<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('type_transaction_id');
            $table->foreign('type_transaction_id')->references('id')->on('type_transaction');

            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            $table->unsignedBigInteger('bankto_id')->nullable();
            $table->foreign('bankto_id')->references('id')->on('banks');

            $table->unsignedBigInteger('subcategory_transaction_id')->nullable();
            $table->foreign('subcategory_transaction_id')->references('id')->on('subcategory_transaction');

            $table->unsignedBigInteger('beneficiary_id');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');

            $table->decimal('amount', 15, 2);
            $table->text('note');
            $table->date('created');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
