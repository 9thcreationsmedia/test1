<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\AcadamicFeeController;
use Validator;

class AcadamicFeeController extends Controller
{

	 public function index()
    {

        $data = DB::table('classtables')->get();
        return view('addacadamicfee',compact('data'));              //add class form view
    }


    public function acadamicfeeadd()
    {

    }

}