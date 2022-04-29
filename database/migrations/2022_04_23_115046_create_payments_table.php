<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string("user_name")->nullable();
            $table->string("trans_id");
            $table->string("amount");
            $table->string("phone")->nullable();
            $table->string("account")->nullable();
            $table->string("info")->nullable();
            $table->string("user_phone")->nullable();
            $table->string("user_email")->nullable();
            $table->boolean("completed")->default(false);
            $table->boolean("waiting")->default(true);
            $table->boolean("sms_sent")->default(false);
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
        Schema::dropIfExists('payments');
    }
}
