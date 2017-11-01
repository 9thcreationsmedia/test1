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
use App\chapter;
use Validator;


class ChapterController extends Controller
{
    public function index()
    {
       //$data =DB::table('sections')->get();
        $class = DB::table('classtables')->get();
        $section = DB::table('sections')->get();
        $subject = DB::table('subjects')->get();
        $teacher = DB::table('employees')->get();
        $chapter = DB::table('chapters')->get();
        return view('addchapter',compact('chapter','subject','class','section','teacher'));
    }

    public function chapteradd(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'chapter_name' => 'required',
            'section' => 'required',
            'class_id' => 'required',
            'subject' => 'required',
            'chapter_no' => 'required',
            //'status' => 'required'
            
        ]);

        if ($validator->passes()) {

          $data=new chapter;                                //create class table object
        $data->chapter_name = $request['chapter_name'];
        $data->class_id = $request['class_id'];
        //$data->teacher_id = $request['teacher'];
        $data->section_id = $request['section'];
        $data->subject_id = $request['subject'];
        $data->chapter_number = $request['chapter_no']; 
        $data->chapter_start_date = date('Y-m-d',strtotime($request['csd'])); 
        $data->chapter_end_date = date('Y-m-d',strtotime($request['ced']));      //insert input values into model object
        $data->save();
        $id = $data->id;
        //$class_id = $data->class_id;
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();

        $section_name = DB::table('sections')->where('id','=',$request['section'])->first();

        $subject_name = DB::table('subjects')->where('id','=',$request['subject'])->first();

        if($request['teacher'] != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";

      return response()->json([$data,$class_name,$teacher_name,$section_name,$subject_name]);
       }
          

      return response()->json(['error'=>$validator->errors()->all()]);
    }










    public function chapterupdateform($id)
     {
        $product = chapter::find($id);
        return response()->json($product);
     }




      public function chapterupdate(Request $request,$id)
    {
          //validation rules starts
        $validator = Validator::make($request->all(), [
            'chapter_name' => 'required',
            'section' => 'required',
            'class_id' => 'required',
            'subject' => 'required',
            'chapter_no' => 'required',
            
        ]);
          //validation rules ends
        if ($validator->passes()) {
        $product = chapter::find($id);
        $product->chapter_name = $request['chapter_name'];
        $product->class_id = $request['class_id'];
        //$data->teacher_id = $request['teacher'];
        $product->section_id = $request['section'];
        $product->subject_id = $request['subject'];
        $product->chapter_number = $request['chapter_no']; 
        $product->chapter_start_date = date('Y-m-d',strtotime($request['csd'])); 
        $product->chapter_end_date = date('Y-m-d',strtotime($request['ced'])); 
        $product->save();
        //$id = $data->id;
        //$class_id = $data->class_id;
        $class_name =  DB::table('classtables')->where('id','=',$request['class_id'])->first();

        $section_name = DB::table('sections')->where('id','=',$request['section'])->first();

        $subject_name = DB::table('subjects')->where('id','=',$request['subject'])->first();

        if($request['teacher'] != null)
        {
          $teacher =  DB::table('employees')->where('id','=',$request['teacher'])->first();
          $teacher_name = $teacher->employee_fname;

        }
        else
          $teacher_name = "";

      return response()->json([$product,$class_name,$teacher_name,$section_name,$subject_name]);
       }
          

      return response()->json(['error'=>$validator->errors()->all()]);


    }

    

     public function destroy($id)
    {
      //return "ok";

      $product = chapter::destroy($id);
      return response()->json($product);

    }

}