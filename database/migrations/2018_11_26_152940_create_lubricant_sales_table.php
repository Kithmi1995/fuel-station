<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLubricantSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lubricant_sales', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('lub_id');
            $table->date('date');
            $table->time('time');
            $table->string('noi');

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
        Schema::dropIfExists('lubricant_sales');
    }
}
