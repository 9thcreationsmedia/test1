<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use App\Http\Controllers\Response;
use App\section;
use App\classtable;
use App\subject;
use Validator;


class SubjectController extends Controller
{
    public function index()
    {
       //$data =DB::table('sections')->get();
        $class = DB::table('classtables')->get();
        $section = DB::table('sections')->get();
        $subject = DB::table('subjects')->get();
        $teacher = DB::table('employees')->get();
        return view('addsubject',compact('subject','class','section','teacher'));
    }

    public function subjectadd(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'subject_name' => 'required',
            'section' => 'required',
            'class_id' => 'required',
            //'status' => 'required'
            
        ]);

        if ($validator->passes()) {

          $data=new subject;                                //create class table object
        $data->subject_name = $request['subject_name'];
        $data->class_id = $request['class_id'];
        $data->teacher_id = $request['teacher'];
        $data->section_id = $request['section'];      //insert input values into model object
        $data->save();
        $id = $data->id;
        //$class_id = $data->class_id;
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();

        $section_name = DB::table('sections')->where('id','=',$request['section'])->first();

        if($request['teacher'] != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";

      return response()->json([$data,$class_name,$teacher_name,$section_name]);
       }
          

      return response()->json(['error'=>$validator->errors()->all()]);
    }










    public function subjectupdateform($id)
     {
        $product = subject::find($id);
        return response()->json($product);
     }




      public function subjectupdate(Request $request,$id)
    {
          //validation rules starts
        $validator = Validator::make($request->all(), [
            'subject_name' => 'required',
            'class_id' => 'required',
            'section' => 'required',
            
        ]);
          //validation rules ends
        if ($validator->passes()) {
        $product = subject::find($id);
        $product->subject_name = $request->subject_name;
        $product->class_id = $request->class_id;
        $product->teacher_id = $request->teacher;
        $product->section_id = $request->section;
        $product->save();
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();

        $section_name = DB::table('sections')->where('id','=',$request['section'])->first();

        if($request->teacher != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";


        return response()->json([$product,$class_name,$teacher_name,$section_name]);
      }
      return response()->json(['error'=>$validator->errors()->all()]);


    }

    

     public function destroy($id)
    {
      //return "ok";

      $product = subject::destroy($id);
      return response()->json($product);

    }

}