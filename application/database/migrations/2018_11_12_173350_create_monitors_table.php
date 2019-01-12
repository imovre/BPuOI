<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('monitor_number')->unique();
            $table->string('monitor_name');
            $table->date('purchase_date');
            $table->date('guarantee_date');
            $table->date('expiry_date')->nullable();
            $table->string('remark')->nullable();
            $table->unsignedInteger('diagonal_id');
            $table->foreign('diagonal_id')->references('id')->on('diagonals');
            $table->unsignedInteger('resolution_id');
            $table->foreign('resolution_id')->references('id')->on('resolutions');
            $table->unsignedInteger('worksite_id');
            $table->foreign('worksite_id')->references('id')->on('worksites');
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
        Schema::drop('monitors');
    }
}
