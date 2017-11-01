<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\ClassController;
use Validator;
use App\parents;

class ParentController extends Controller
{

	


    //view class function
     public function index()
    {

       $data = DB::table('parents')->get();            //get content from class table
       return view('addparent',compact('data'));

    }



     public function parentadd(Request $request)
    {

      $input=Input::all();
       $parent=new parents;
        //$parent->parent_id=17;
        $parent->parent_fname=$input['pfname'];
        $parent->parent_lname=$input['plname'];
        $parent->relation_with_student=$input['prelation'];
        $parent->gender=$input['pgender'];
        $parent->present_address=$input['present_add'];
        $parent->permanent_address=$input['perm_add'];
        $parent->email=$input['pemail'];
        $parent->phone=$input['pcontact'];
        $parent->qualification=$input['parent_qualification'];
        $parent->aadhar=$input['parent_aadhar'];
        $parent->pan=$input['parent_pan'];
        $parent->blood_groop=$input['parent_bloodgroup'];
        $parent->caste=$input['pcaste'];
        //$parent->religion=$input['religion'];
        $parent->city=$input['city'];
        $parent->state=$input['pstate'];
        $parent->zip=$input['zip'];
        $parent->dob = date('Y-m-d',strtotime($input['par_dob']));



        if($request->hasFile('pphoto')) 
        {
            $file = Input::file('pphoto');
            $name = time(). '-' .$file->getClientOriginalName();
            $parent->upload_photo = $name;

            $file->move(public_path().'/images/parents/', $name);
        }
        //$parent->photo=$input['parent_fname'];
        $parent->save();
       return redirect('parentsettings')->with('update','Parent Details has been updated'); 

    }




    public function parentsettings()
    {

       $data =DB::table('parents')->get();

       return view('parentsettings',compact('data'));

    }

    public function parentupdateform($id)
    {

       $parent_id=$id;                                   
       $parent=parents::find($parent_id);           

       return view('editparentform',compact('parent'));
    }

     public function parentupdate(Request $request)
    {
         $input = Input::all();   //get input values from form
       
       $data2 = DB::table('parents')->where('id','=',$input['parent_id'])->first(); 
       //return $input['student_id'];
       $parent=new parents;
       $id=$input['parent_id'];
       $par_fname=$input['parent_fname'];
       $par_lname=$input['parent_lname'];
       $par_gender=$input['parent_gender'];
       $dob=$input['dob'];
       $email=$input['email'];
       $pan=$input['pan'];
       $caste=$input['caste'];
       $religion = $input['religion'];
       $phone=$input['phone'];
       $qualification=$input['qualification'];
       $aadhar=$input['parent_aadhar'];
       $rws=$input['rws'];
       $blood_groop=$input['parent_bloodgroup'];
       //upload photo
       if(isset($input['parent_photo']))
       {
        if(isset($data2->upload_photo))
        {
            $photo = $data2->upload_photo;
            $photo_path = public_path().'/images/parents/'.$photo;
            @unlink($photo_path);
        }
            $file = Input::file('parent_photo');
            $upload_photo = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/images/parents/', $upload_photo);


      }

      else if(isset($data2->upload_photo))
      {
        $upload_photo = $data2->upload_photo;
      }

      else
      {
        $upload_photo = "";
      }      



      
   

        
       $affectedRows =parents::where('id', '=', $id)->update(array('parent_fname' => $par_fname,'parent_lname' => $par_lname,'email' => $email,'gender' => $par_gender,'dob' => $dob,
        'aadhar' => $aadhar,'blood_groop' => $blood_groop,'pan' => $pan,'caste' => $caste,'religion' => $religion,'upload_photo' => $upload_photo,'qualification' => $qualification,'phone' => $phone,'relation_with_student' => $rws));                                  

       return redirect('parentsettings')->with('update','Parent Details has been updated');

    }

    public function parentdelete($id)
    {

      if(isset($id)) 
      {
        $record = parents::find($id);
        if($record)
         {

          $photo = $record->upload_photo;
           $photo_path = public_path().'/images/parents/'.$photo;
            @unlink($photo_path);
            
            parents::find($id)->delete();                     //delete record 
            return redirect('parentsettings')->with('success', 'Parent Record has been deleted');
         }

      }

    }



    
}
