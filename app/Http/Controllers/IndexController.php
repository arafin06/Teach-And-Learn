<?php

namespace App\Http\Controllers;

use App\Department;
use App\Subject;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){


        $subjects = Subject::where('publication_status', 1)->get();
        $departments = Department::where('publication_status', 1)->get();
        return view('main.main.index',[
            'subjects'    =>  $subjects,
            'departments'    =>  $departments
        ]);
    }


}
