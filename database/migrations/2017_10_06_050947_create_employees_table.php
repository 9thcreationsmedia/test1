<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('employees', function (Blueprint $table) {
          $table->increments('id');
            $table->char('user_type',30);
            $table->char('employee_fname',50);
            $table->char('employee_lname',50);
            $table->date('dob');
            $table->char('email',50)->nullable();
            $table->char('gender',10);
            $table->char('phone',20);
            $table->string('present_address',100);
            $table->char('city',30);
            $table->char('state',30);
            $table->char('zip',20);
            $table->char('qualification',50)->nullable();
            $table->char('experience_in_years',10)->nullable();
            $table->date('doj')->nullable();
            $table->date('dol')->nullable();
            $table->char('aadhar',30)->nullable();
            $table->char('pan',30)->nullable();
            $table->string('hobbies',100)->nullable();
            $table->char('blood_groop',20)->nullable();
            $table->char('caste',30)->nullable();
            $table->char('religion',30)->nullable();
            $table->char('upload_photo',150)->nullable();
            $table->char('upload_resume',150)->nullable();
            $table->char('upload_certificates',150)->nullable();

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
        Schema::dropIfExists('employees');
    }
}
