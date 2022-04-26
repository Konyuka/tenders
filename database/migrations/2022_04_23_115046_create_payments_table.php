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
            // $table->bigInteger("user_id")->unsigned();
            $table->string("trans_id");
            // $table->string("phone")->nullable()->change();
            $table->string("phone")->nullable();
            $table->string("amount");
            $table->string("info")->nullable();
            $table->boolean("completed")->default(false);
            $table->boolean("waiting")->default(true);
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
