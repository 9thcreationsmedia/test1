<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('students');
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->char('stud_adm_id',30)->unique();
            $table->char('student_fname',50);
            $table->char('student_lname',50);
            $table->char('email',50)->nullable();
            $table->char('gender',10);
            $table->char('roll_no',10);
            $table->date('dob')->nullable();
            $table->date('doj')->nullable();
            $table->date('dol')->nullable();
            $table->char('aadhar',30)->nullable();
            $table->string('hobbies',100)->nullable();
            $table->char('blood_groop',20)->nullable();
            $table->char('upload_photo',150)->nullable();
            $table->char('upload_tc',150)->nullable();
            $table->char('upload_certificates',150)->nullable();
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classtables')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('students');
    }
}
