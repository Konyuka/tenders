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
            $table->text('purchasing_authority')->nullable();
            $table->text('tender_number')->unique();
            $table->longText('tender_brief')->nullable();
            $table->text('competition_type')->nullable();
            $table->text('category')->nullable();
            $table->text('funded_by')->nullable();
            $table->text('country')->nullable();
            $table->text('value')->nullable();
            $table->longText('work_detail')->nullable();
            $table->text('expiry')->nullable();
            $table->text('address')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('link')->nullable();
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
