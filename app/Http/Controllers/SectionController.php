<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\ClassController;
use App\classtable;
use App\section;
use Validator;

class SectionController extends Controller
{

   public function index()
    {

        $teacher = DB::table('employees')->get();
        $class = DB::table('classtables')->get();
        $section = DB::table('sections')->get();
        return view('addsection',compact('class','section','teacher'));              //add class form view
    }

    //code for adding class form
 

         public function sectionadd(Request $request)
    {



      $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_name' => 'required',
            //'status' => 'required'
            
        ]);

        if ($validator->passes()) {

          $data=new section;                                //create class table object
        $data->section_name = $request['section_name'];
        $data->class_id = $request['class_id'];
        $data->teacher_id = $request['teacher'];
        $data->status = $request['status'];      //insert input values into model object
        $data->save();
        $id = $data->id;
        //$class_id = $data->class_id;
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();

        if($request['teacher'] != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";

      return response()->json([$data,$class_name,$teacher_name]);
       }
          //$data=new classtable;                                //create class table object
        //$data->class_name = $request['name'];
        //$data->class_teacher = $request['details'];      //insert input values into model object
        //$data->save();

      //return response()->json(['success'=>'Added new records.',$data])
        //}

      return response()->json(['error'=>$validator->errors()->all()]);
    


        //$product = classtable::create($request->input());
         //return response()->json($product);

        
    }





   
         
        

    


    public function sectionupdateform($id)
    {

        $product = section::find($id);
        return response()->json($product);
    }

     public function sectionupdate(Request $request,$id)
    {
          //validation rules starts
        $validator = Validator::make($request->all(), [
            'section_name' => 'required',
            'class_id' => 'required'
            //'class_teacher' => 'required',
            
        ]);
          //validation rules ends
        if ($validator->passes()) {
        $product = section::find($id);
        $product->section_name = $request->section_name;
        $product->class_id = $request->class_id;
        $product->teacher_id = $request->teacher;
        $product->status = $request->status;
        $product->save();
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();
        if($request->teacher != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";


        return response()->json([$product,$class_name,$teacher_name]);
      }
      return response()->json(['error'=>$validator->errors()->all()]);


    }

    public function destroy($id)
    {
      //return "ok";

      $product = section::destroy($id);
      return response()->json($product);

    }
    
}
