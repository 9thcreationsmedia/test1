<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\student;
use App\parents;
//use App\classtable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    public function index($id)
    {

       $parent_id = $id;
        $data =DB::table('classtables')->get();
        $section = DB::table('sections')->get();
        return view('addstudent',compact('data','section','parent_id'));

    }

    public function studentAdd(Request $request)
    {
        //craete student model object
       // $student = new student;
        //take inputs from form
       // $inputs=Input::all();
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
        $input=Input::all();
        
        $date = date('Y'); 

        $class_name =  DB::table('classtables')->where('id','=',$input['class_id'])->first();

        $class_name = $class_name->class_name;

        $student_test = DB::table('students')->get();
        $stu = $student_test->isEmpty();
        

        if($stu == true)
        {
          //return 'true';
          $no = 1;
        }
        else
        {
          //return 'false';
          $last_row = DB::table('students')->latest()->first();
          //return $last_row;

          $no = $last_row->id;

          $no = $no+1;

        }

       $stu_adm_no = $class_name .''.$date.''.$no;




       // $last2 = DB::table('parents')->orderBy('id', 'DESC')->first();

        //$parent_id = $last2->id;

        $class_name =  DB::table('classtables')->where('id','=',$input['class_id'])->first();

        $class_name = $class_name->class_name;


        //craete student object 
        $data = new student;
        $data->stud_adm_id = $stu_adm_no;
        $data->roll_no = $no;
        $data->student_fname = $input['stu_fname'];
        $data->student_lname = $input['stu_lname'];
        $data->gender = $input['stu_gender'];
        $data->email = $input['stu_email'];
        $data->dob = date('Y-m-d',strtotime($input['stu_dob']));
        $data->doj = date('Y-m-d',strtotime($input['stu_doj']));
        $data->blood_groop = $input['stu_bloodgroup'];
        $data->email = $input['stu_email'];
        $data->aadhar = $input['stu_aadhar'];
        //$data->upload_photo = $input['stu_photo'];
        //$data->upload_tc = $input['tc'];
        //$data->upload_certificates = $input['certificates'];
        $data->parent_id = $input['parent_id'];
        $data->class_id = $input['class_id'];
        $data->section_id = $input['section_id'];
        $data->hobbies = $input['stu_hobbies'];


        if($request->hasFile('stu_photo')) 
        {
            $stu_photo_file = Input::file('stu_photo');
            $stu_photo_name = time(). '-' .$stu_photo_file->getClientOriginalName();
            $data->upload_photo = $stu_photo_name;

            $stu_photo_file->move(public_path().'/images/students/photo/', $stu_photo_name);
        }


        if($request->hasFile('tc')) 
        {
            $stu_tc_file = Input::file('tc');
            $stu_tc_name = time(). '-' .$stu_tc_file->getClientOriginalName();
            $data->upload_tc = $stu_tc_name;

            $stu_tc_file->move(public_path().'/images/students/tc/', $stu_tc_name);
        }


        if($request->hasFile('certificates')) 
        {
            $stu_certificates_file = Input::file('certificates');
            $stu_certificates_name = time(). '-' .$stu_certificates_file->getClientOriginalName();
            $data->upload_certificates = $stu_certificates_name;

            $stu_certificates_file->move(public_path().'/images/students/certificates/', $stu_tc_name);
        }

        
        //add data in database       
        $data->save();

        

        //page will redirect to specified file
        return redirect('studentsettings')->with('add','Student & Parent Details has been added ');
     //}

    }


    public function studentDetails()
    {
        
        //$student = DB::table('students')->get();
        //$class = DB::table('classtables')->get();
        //$section = DB::table('sections')->get();
        $students =DB::table('students')
                ->join('classtables', 'classtables.id', '=', 'students.class_id')
                ->join('sections', 'sections.id', '=', 'students.section_id')
                ->get();
        return view('studentdetails',compact('students'));

    }

    public function studentSettings()
    {
        
        $students =student::select("students.*","classtables.class_name","sections.section_name","students.id as studedntId","classtables.id as classId","sections.id as sectionId")
                ->join('classtables', 'classtables.id', '=', 'students.class_id')
                ->join('sections', 'sections.id', '=', 'students.section_id')
                
                ->get();
                /*foreach($students as $student)
                {
                    echo $student->id;
                }*/
                
        return view('studentsettings',compact('students'));

    }


     public function editStudentForm($id)
    {
        $student_id=$id;

        $student =  student::select("students.*","classtables.class_name","sections.section_name","students.id as studedntId","classtables.id as classId","sections.id as sectionId")
            ->join('classtables', 'classtables.id', '=', 'students.class_id')
            ->join('sections', 'sections.id', '=', 'students.section_id')
            ->where('students.id', '=', $student_id)
            ->first();
        $class_name = $student->class_name;
        $section_name = $student->section_name;

        $class = DB::table("classtables")->where('class_name','!=',$class_name)->get();
        $section = DB::table("sections")->where('section_name','!=',$section_name)->get();

        //return $p->section_name;
        
        
        return view('editstudentform',compact('student','class','section'));

    }

    public function studentupdate()
    {
  
        
        $input = Input::all();   //get input values from form
       
       $data2 = DB::table('students')->where('id','=',$input['student_id'])->first(); 
       //return $input['student_id'];
       $data=new student;
       $id=$input['student_id'];
       $stu_fname=$input['stu_fname'];
       $stu_lname=$input['stu_lname'];
       $stu_gender=$input['stu_gender'];
       //$dob=$input['dob'];
       $dob = date('Y-m-d',strtotime($input['dob']));
       $email=$input['stu_email'];
       //$roll_no=$input['roll_no'];
       $class_id=$input['class_id'];
       $section_id = $input['section_id'];
       $doj=date('Y-m-d',strtotime($input['doj']));
       //$dol=$input['dol'];
       $aadhar=$input['stu_aadhar'];
       $hobbies=$input['stu_hobbies'];
       $blood_groop=$input['stu_bloodgroup'];
       //upload photo
       if(isset($input['stu_photo']))
       {
        if(isset($data2->upload_photo))
        {
            $photo = $data2->upload_photo;
            $photo_path = public_path().'/images/students/photo/'.$photo;
            @unlink($photo_path);
        }
            $file = Input::file('stu_photo');
            $upload_photo = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/images/students/photo/', $upload_photo);


      }

      else if(isset($data2->upload_photo))
      {
        $upload_photo = $data2->upload_photo;
      }

      else
      {
        $upload_photo = "";
      }

      //upload certificate

      if(isset($input['certificates']))
       {
            $cfile = Input::file('certificates');
            $upload_certificates = time() . '-' . $cfile->getClientOriginalName();
            $cfile->move(public_path() . '/images/students/certificates/', $upload_certificates);


      }

      else if(isset($data2->upload_certificates))
      {
        $upload_certificates = $data2->upload_certificates;
      }

      else
      {
        $upload_certificates = "";
      }


      //upload tc
      if(isset($input['tc']))
       {
            $tcfile = Input::file('tc');
            $upload_tc = time() . '-' . $tcfile->getClientOriginalName();
            $tcfile->move(public_path() . '/images/students/tc/', $upload_tc);


      }

      else if(isset($data2->upload_tc))
      {
        $upload_tc = $data2->upload_tc;
      }

      else
      {
        $upload_tc = "";
      }

      
   

        
       $affectedRows =student::where('id', '=', $id)->update(array('student_fname' => $stu_fname,'student_lname' => $stu_lname,'email' => $email,'gender' => $stu_gender,'dob' =>$dob,'doj' =>$doj,
        'aadhar' => $aadhar,'blood_groop' => $blood_groop,'class_id' => $class_id,'section_id' => $section_id,'hobbies' => $hobbies,'upload_photo' => $upload_photo,
         'upload_tc' => $upload_tc,'upload_certificates' => $upload_certificates));                                  //update query

       return redirect('studentsettings')->with('update','Student has been updated');

    }



    public function studentdelete($id)
     {
       if(isset($id)) 
      {
           $record = student::find($id);
           //return  $record->student_fname;


         if($record) 
         {

          $photo = $record->upload_photo;
           $photo_path = public_path().'/images/students/photo/'.$photo;
            @unlink($photo_path);

            $tc = $record->upload_tc;
           $tc_path = public_path().'/images/students/tc/'.$tc;
            @unlink($tc_path);

            $certificate = $record->upload_certificates;
           $certificate_path = public_path().'/images/students/certificates/'.$certificate;
            @unlink($certificate_path);

            student::find($id)->delete();
           return redirect('studentsettings')->with('success', 'student has been deleted');
          }

       }

      }



}
