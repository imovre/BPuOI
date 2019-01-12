<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computer_number')->unique();
            $table->string('computer_name');
            $table->boolean('odd');
            $table->date('purchase_date');
            $table->date('guarantee_date');
            $table->date('expiry_date')->nullable();
            $table->string('remark')->nullable();
            $table->unsignedInteger('cpu_id');
            $table->foreign('cpu_id')->references('id')->on('cpus');
            $table->unsignedInteger('hdd_id');
            $table->foreign('hdd_id')->references('id')->on('hdds');
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
        Schema::drop('computers');
    }
}
