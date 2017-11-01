<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\ClassController;
use App\classtable;
use App\employee;
use Validator;

class ClassController extends Controller
{

   public function index()
    {

        $incharge = DB::table('employees')->get();
        $class = DB::table('classtables')->get();
        return view('addclass',compact('class','incharge'));              //add class form view
    }

    //code for adding class form
 

         public function classadd(Request $request)
    {




      $validator = Validator::make($request->all(), [
            'class_name' => 'required',
            //'class_teacher' => 'required',
            
        ]);

        if ($validator->passes()) {


          $data=new classtable;                                //create class table object
        $data->class_name = $request['class_name'];
        $data->teacher_id = $request['class_teacher'];      //insert input values into model object
        $data->save();
        $id = $data->id;
        //$employee_id = $data->teacher_id;

        //$incharge = DB::table('employees')->where('id','=',$request['class_teacher'])->first();
        if($request['class_teacher'] != null)
        {
          $inch =  DB::table('employees')->where('id','=',$request['class_teacher'])->first();
          $inch_name = $inch->employee_fname;

        }
        else
          $inch_name = "";
        

        return response()->json([$data,$inch_name]);


      //return response()->json([$data,$incharge]);
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





   
         
        

    


    public function classupdateform($id)
    {

        $product = classtable::find($id);
        return response()->json($product);
    }

     public function classupdate(Request $request,$id)
    {
          //validation rules starts
        $validator = Validator::make($request->all(), [
            'class_name' => 'required',
            //'class_teacher' => 'required',
            
        ]);
          //validation rules ends
        if ($validator->passes()) {
        $product = classtable::find($id);
        $product->class_name = $request->class_name;
        $product->teacher_id = $request->class_teacher;
        $product->save();
         if($request['class_teacher'] != null)
        {
          $inch =  DB::table('employees')->where('id','=',$request['class_teacher'])->first();
          $inch_name = $inch->employee_fname;

        }
        else
          $inch_name = "";

        return response()->json([$product,$inch_name]);
      }
      return response()->json(['error'=>$validator->errors()->all()]);


    }

    public function destroy($id)
    {
      //return "ok";

      $product = classtable::destroy($id);
      return response()->json($product);

    }
    
}
