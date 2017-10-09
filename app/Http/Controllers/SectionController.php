<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\SectionController;
use Illuminate\Http\Request;
use App\section;
use App\classtable;

class SectionController extends Controller
{
    public function index()
    {
       $data =DB::table('sections')->get();
       $cname = DB::table('classtables')->get();
        return view('addsection',compact('data','cname'));
    }

    public function sectionadd()
    {
     
        $input=Input::only('class_name','section_name','section_teacher','status');
        $data=new section;

        $data->class_id = $input['class_name'];
        $data->section_name = $input['section_name'];
        $data->section_teacher = $input['section_teacher'];

        $data->status = $input['status'];
        $data->save();

        return redirect('viewsection');
    }

     public function viewsection()
    {
        $data =DB::table('sections')->get();
        $cname = DB::table('classtables')->get();

        return view('viewsection',compact('data','cname'));
    }

     public function sectionsettings()
    {
       $data =DB::table('sections')->get();
       $cname = DB::table('classtables')->get();

       return view('sectionsettings',compact('data','cname'));
    }

    public function sectionupdateform($id)
    {

          $section = new section;
          $section->id=$id;
          $data=section::find($section->id);
          $class_id = $data->class_id;

          $cid = classtable::where('id','=',$class_id)->first();
          $classname = $cid->class_name;
          $cname = DB::table('classtables')->where('class_name','!=',$classname)->get();

         return view('sectionupdateform',compact('data','cname','classname'));
    }

    public function sectionupdate()
    {
        
       $input = Input::only('id','class_id','section_name','section_teacher','status'); 
       $data=new section;
       $id=$input['id'];
       $cid=$input['class_id'];
       $section_name=$input['section_name'];

       $section_teacher=$input['section_teacher'];
       $status=$input['status'];
  
       $affectedRows =section::where('id', '=', $id)->update(array('class_id' => $cid,'section_name' => $section_name,'section_teacher' => $section_teacher,'status' => $status));
    
       return redirect('sectionsettings')->with('update','Section has been Updated');

    }

     public function destroy($id)
     {
       if(isset($id)) 
       {
          $record = section::find($id);
          if($record) 
          {
            section::find($id)->delete();
            return redirect('sectionsettings')->with('success', 'Section has been deleted');
          }

       }

     }

}