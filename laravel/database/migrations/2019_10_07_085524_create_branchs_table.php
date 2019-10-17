<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('google_map')->nullable();
            $table->string('image');
            $table->string('contact');
            $table->string('location');
            $table->text('delivery_zone')->nullable();
            $table->bigInteger('zone_id')->unsigned()->nullable();
            $table->foreign('zone_id')
            ->references('id')->on('zones')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('branchs');
    }
}
