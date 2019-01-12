<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('printer_number')->unique();
            $table->string('printer_name');
            $table->date('purchase_date');
            $table->date('guarantee_date');
            $table->date('expiry_date')->nullable();
            $table->string('remark')->nullable();
            $table->unsignedInteger('printer_type_id');
            $table->foreign('printer_type_id')->references('id')->on('printer_types');
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
        Schema::drop('printers');
    }
}
