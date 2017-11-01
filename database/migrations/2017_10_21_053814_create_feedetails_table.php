<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedetails', function (Blueprint $table) {
            $table->increments('id');
            $table->char('fee_type',50);
            $table->decimal('amount', 7, 2);
            $table->decimal('extra_curricular',7,2);
            $table->char('num_terms',10);
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classtables')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('feedetails');
    }
}
