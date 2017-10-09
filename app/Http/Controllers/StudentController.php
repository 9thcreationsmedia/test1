<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\student;
use App\parents;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $data =DB::table('classes')->get();
        return view('addstudent',compact('data'));

    }

    public function addStudent()
    {
        //craete student model object
        $student = new student;
        //take inputs from form
        $inputs=Input::all();
        //checking validation rules given to that form
        //$validation = Validator::make($inputs, student::$rules);

      /*if($validation->fails())
      {
    
        //if validation rules fail then page will redirect to the same page with error message
        return Redirect::to('/studentaddform')->withErrors($validation)->withInput();

      }

      else
      {*/
      
        //take inputs from form
        $input=Input::only('stu_fname','stu_lname','stu_gender','dob','doj','roll_no','blood_grp','email','aadhar','photo','tc','certificates','parent_id','class_id','section_id','parent_fname','parent_lname','parent_gender','guardian','contact','parent_email','parent_aadhar','pan_no','qualification','parent_blood_grp','caste','present_add','perm_add');
        



        $parent=new parents;
        $parent->parent_id=17;
        $parent->parent_name=$input['parent_fname'];
        $parent->gender=$input['parent_gender'];
        $parent->address=$input['present_add'];
        $parent->parent_name=$input['parent_fname'];
        $parent->email=$input['parent_email'];
        $parent->telephone=$input['contact'];
        $parent->occupation=$input['qualification'];
        $parent->aadhar_no=$input['parent_aadhar'];
        $parent->blood_grp=$input['parent_blood_grp'];
        $parent->caste=$input['caste'];
        $parent->city='city';
        $parent->state='state';
        $parent->zip='zip';
        //$parent->photo=$input['parent_fname'];
        $parent->save();

        //craete student object 
        $data=new student;
        $data->stu_id = 1;
        $data->student_fname = $input['stu_fname'];
        $data->student_lname = $input['stu_lname'];
        $data->gender = $input['stu_gender'];
        $data->dob = $input['doj'];
        $data->doj = $input['doj'];
        $data->student_blood_grp = $input['blood_grp'];
        $data->student_email = $input['email'];
        $data->student_aadhar_no = $input['aadhar'];
        $data->upload_photo = $input['photo'];
        $data->upload_tc = $input['tc'];
        $data->upload_certificates = $input['certificates'];
        $data->parent_id = 16;
        $data->class_id = 22;
        $data->section_id = 32;

        
        //add data in database       
        $data->save();

        

        //page will redirect to specified file
        return ('data added successfully');
     //}

    }

}
