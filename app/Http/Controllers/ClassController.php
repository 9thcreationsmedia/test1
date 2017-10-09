<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\ClassController;
use App\classtable;

class ClassController extends Controller
{

	 public function index()
    {
        
        return view('addclass',compact('data'));              //add class form view
    }

    //code for adding class form
    public function classadd()
    {
        
        $input=Input::only('class_name','class_teacher');    //take input values from form
        $data=new classtable;                                //create class table object
        $data->class_name = $input['class_name'];
        $data->class_teacher = $input['class_teacher'];      //insert input values into model object
        $data->save();                                       //save table
        
        return redirect('viewclass');                        
    
    }

    //view class function
     public function viewclass()
    {

       $data =DB::table('classtables')->get();            //get content from class table

       return view('viewclass',compact('data'));

    }

    public function classsettings()
    {

       $data =DB::table('classtables')->get();

       return view('classsettings',compact('data'));

    }

    public function classupdateform($id)
    {

       $class = new classtable;                           //create new class model object
       $class->id=$id;                                    //get id parameter
       $data=classtable::find($class->id);                //find id from class table             

       return view('classupdateform',compact('data'));
    }

     public function classupdate()
    {
        
       $input = Input::only('id','class_name','class_teacher');   //get input values from form
       $data=new Classtable;
       $id=$input['id'];
       $class_name=$input['class_name'];
       $class_teacher=$input['class_teacher'];
       $affectedRows =Classtable::where('id', '=', $id)->update(array('class_name' => $class_name,'class_teacher' => $class_teacher));                                  //update query

       return redirect('classsettings')->with('update','Class has been updated');

    }

    public function classdelete($id)
    {

      if(isset($id)) 
      {
        $record = Classtable::find($id);
        if($record)
         {
            Classtable::find($id)->delete();                     //delete record 
            return redirect('classsettings')->with('success', 'Class has been deleted');
         }

      }

    }
    
}
