<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryTransactionIdToSubcategoryTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategory_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('category_transaction_id')->after('id');
            $table->foreign('category_transaction_id')->references('id')->on('category_transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcategory_transaction', function (Blueprint $table) {
            $table->dropForeign(['category_transaction_id']);
            $table->dropColumn('category_transaction_id');
        });
    }
}
