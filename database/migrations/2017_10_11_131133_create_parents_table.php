<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            //$table->char('parent_id',50);
            $table->char('parent_fname',50);
            $table->char('parent_lname',50);
            $table->char('relation_with_student',30);
            $table->char('email',50)->nullable();
            $table->char('gender',10);
            $table->char('phone',20);
            $table->string('present_address',100)->nullable();
            $table->string('permanent_address',100)->nullable();
            $table->char('city',30);
            $table->char('state',30);
            $table->char('zip',20)->nullable();
            $table->char('qualification',50)->nullable();
            $table->date('dob')->nullable();
            $table->char('aadhar',30)->nullable();
            $table->char('pan',30)->nullable();
            $table->char('blood_groop',20)->nullable();
            $table->char('caste',30)->nullable();
            $table->char('religion',30)->nullable();
            $table->char('upload_photo',150)->nullable();
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
        Schema::dropIfExists('parents');
    }
}