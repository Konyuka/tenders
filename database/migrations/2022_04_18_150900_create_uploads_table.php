<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('purchasing_Authority')->nullable();
            // $table->string('email')->unique();
            $table->text('tender_number')->nullable();
            $table->text('tender_brief')->nullable();
            $table->text('competition_type')->nullable();
            $table->text('funded_by')->nullable();
            $table->text('country')->nullable();
            $table->text('title')->nullable();
            $table->text('value')->nullable();
            $table->text('work_detail')->nullable();
            $table->text('address')->nullable();
            $table->text('email')->nullable();
            $table->text('link')->nullable();
            $table->text('expiry')->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
