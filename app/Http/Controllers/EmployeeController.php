<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;
use App\Employee;
use App\Http\Requests;



class EmployeeController extends Controller
{
    public function index()
    {
       
        return view('addemployee',compact('data'));
    }
      public function employeeadd(Request $request)
    {
     
        $input=Input::only('user_type','employee_fname','employee_lname','dob','email','gender','phone','present_address','city','state','zip','qualification','experience_in_years','doj','dol','aadhar','pan','hobbies','blood_groop','caste','religion','upload_photo','upload_resume','upload_certificates');
        $data=new Employee;

        $data->user_type= $input['user_type'];
        $data->employee_fname = $input['employee_fname'];
        $data->employee_lname = $input['employee_lname'];
        $data->dob = date('Y-m-d',strtotime($input['dob']));
        $data->email = $input['email'];

        $data->gender = $input['gender'];
        $data->phone = $input['phone'];

        $data->present_address = $input['present_address'];
        $data->city = $input['city'];
        $data->state = $input['state'];
        $data->zip = $input['zip'];

        $data->qualification = $input['qualification'];
        $data->experience_in_years = $input['experience_in_years'];
        $data->doj = date('Y-m-d',strtotime($input['doj']));
        $data->dol = date('Y-m-d',strtotime($input['dol']));
        $data->aadhar = $input['aadhar'];
        $data->pan = $input['pan'];
         $data->hobbies = $input['hobbies'];
        $data->blood_groop = $input['blood_groop'];
        $data->caste = $input['caste'];
        $data->religion = $input['religion'];


        if($request->hasFile('upload_photo')) {
            $file = Input::file('upload_photo');
            $name = time(). '-' .$file->getClientOriginalName();
            $data->upload_photo = $name;

            $file->move(public_path().'/uploads/', $name);
        }
        
        if($request->hasFile('upload_resume')) {
            $file = Input::file('upload_resume');
            $rname = time(). '-' .$file->getClientOriginalName();
            $data->upload_resume = $rname;

            $file->move(public_path().'/uploads/', $rname);
        }
         if($request->hasFile('upload_certificates')) {
            $file = Input::file('upload_certificates');
            $crname = time(). '-' .$file->getClientOriginalName();
            $data->upload_certificates = $crname;

            $file->move(public_path().'/uploads/', $crname);
        }
        
        $data->save();

        return redirect('viewemployee');
    }
     public function viewemployee()
    {
        $data =DB::table('employees')->get();
        

        return view('viewemployee',compact('data'));
    }
      public function employeesettings()
    {
       $data =DB::table('employees')->get();
       

       return view('employeesettings',compact('data'));
    }


        public function employeeupdateform($id)
    {

       $employee = new employee;                           //create new class model object
       $employee->id=$id;                     
                      //get id parameter
       $data=employee::find($employee->id);                //find id from class table             

       return view('employeeupdateform',compact('data'));
    }

     public function employeeupdate()
    {
        
       $input = Input::only('id','user_type','employee_fname','employee_lname','dob','email','gender','phone','present_address','city',
       'state','zip','qualification','experience_in_years','doj','dol','aadhar','pan','hobbies','blood_groop','caste','religion','upload_photo','upload_resume','upload_certificates');   //get input values from form
       
       $data2 =DB::table('Employees')->where('id','=',$input['id'])->first(); 

       $data=new employee;
       $id=$input['id'];
       $user_type=$input['user_type'];
       $employee_fname=$input['employee_fname'];
       $employee_lname=$input['employee_lname'];
       $dob= date('Y-m-d',strtotime($input['dob']));
       $email=$input['email'];
       $gender=$input['gender'];
       $phone=$input['phone'];
       $present_address = $input['present_address'];
        $city = $input['city'];
        $state = $input['state'];
        $zip = $input['zip'];
       $qualification=$input['qualification'];
       $experience_in_years=$input['experience_in_years'];
       $doj= date('Y-m-d',strtotime($input['doj']));
       $dol= date('Y-m-d',strtotime($input['dol']));
       $aadhar=$input['aadhar'];
        $pan=$input['pan'];
       $hobbies=$input['hobbies'];
       $blood_groop=$input['blood_groop'];
       $caste=$input['caste'];
       $religion=$input['religion'];
       $upload_photo=$data2->upload_photo;
      $upload_resume=$data2->upload_resume;
      $upload_certificates=$data2->upload_certificates;
    if(Input::hasFile('upload_photo')) {

            $file = Input::file('upload_photo');

            $upload_photo = time() . '-' . $file->getClientOriginalName();
            //$data->Receipt = $name;
            $file->move(public_path() . '/uploads/', $upload_photo);         
    
   
        }
        
      
    if(Input::hasFile('upload_resume')) {

            $file = Input::file('upload_resume');

            $upload_resume = time() . '-' . $file->getClientOriginalName();
            //$data->Receipt = $name;
            $file->move(public_path() . '/uploads/', $upload_resume);         
    
   
        }
        
       
    if(Input::hasFile('upload_certificates')) {

            $file = Input::file('upload_certificates');

            $upload_certificates = time() . '-' . $file->getClientOriginalName();
            //$data->Receipt = $name;
            $file->move(public_path() . '/uploads/', $upload_certificates);         
    
   
        }
        
       $affectedRows =Employee::where('id', '=', $id)->update(array('user_type' => $user_type,'employee_fname' => $employee_fname,'employee_lname' => $employee_lname,'dob' => $dob,'email' => $email,'gender' => $gender,'phone' => $phone,
        'present_address' => $present_address,'city' => $city,'state' => $state,'zip' => $zip ,'qualification' => $qualification,
         'experience_in_years' => $experience_in_years,'doj' => $doj,'dol' => $dol,'caste' => $caste,'religion' => $religion,
         'aadhar' => $aadhar,'pan' => $pan,'blood_groop' => $blood_groop,'hobbies' => $hobbies,'upload_photo' => $upload_photo,
         'upload_resume' => $upload_resume,'upload_certificates' => $upload_certificates));                                  //update query

       return redirect('employeesettings')->with('update','Employee has been updated');

    }


 public function employeedelete($id)
    {

      if(isset($id)) 
      {
        $record = Employee::find($id);
        if($record)
         {
            employee::find($id)->delete();                     //delete record 
            return redirect('employeesettings')->with('success', 'Employee has been deleted');
         }

      }

    }
    

}
