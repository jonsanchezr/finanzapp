<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeTransactionIdToCategoryTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('type_transaction_id')->after('id');
            $table->foreign('type_transaction_id')->references('id')->on('type_transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_transaction', function (Blueprint $table) {
            $table->dropForeign(['type_transaction_id']);
            $table->dropColumn('type_transaction_id');
        });
    }
}
