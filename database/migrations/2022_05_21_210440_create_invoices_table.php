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
            $table->string('prefix')->default('BID-');
            $table->string('number_sequence')->default('0001');
            $table->string("invoice_number")->nullable();
            $table->string("amount")->nullable();
            $table->string("post_id")->nullable();
            $table->string("payment_type")->nullable();
            $table->string("trans_id");
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
        Schema::dropIfExists('invoices');
    }
}
