<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('serial', 255)->unique();
            $table->string('from_name', 255);
            $table->string('from_country', 255);
            $table->string('from_state', 255);
            $table->string('from_city', 255);
            $table->string('from_address', 255);
            $table->string('from_phone', 255);
            $table->string('from_mail', 255);
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
        Schema::dropIfExists('invoices');
    }
}
