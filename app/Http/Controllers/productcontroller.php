<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    function list(){
        //$students = array();
        $students = array();
        for($i=1;$i<=10;$i++){
            $student = array(
                "id"=>$i,
                "name"=>"student $i",
                "dob"=>"12.12.12"
            );
            $students[] = (object)$student;
        }

        return view('product.service')
               ->with('students',$students);
    }
}
