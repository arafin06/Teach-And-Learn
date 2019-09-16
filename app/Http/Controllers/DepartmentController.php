<?php

namespace App\Http\Controllers;

use App\Department;
use App\Subject;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment(){
        $subjects = Subject::where('publication_status', 1)->get();
        return view('admin.department.add-department',[
            'subjects'    =>  $subjects
        ]);
    }
    public function viewDepartment(){
        $department = Department::all();
        return view('admin.department.view-department',[
            'departments'=>$department
        ]);
    }

    public function newDepartment(Request $request){
        $department = new Department();
        $department->subject_id = $request->subject_id;
        $department->department_name = $request->department_name;
        $department->publication_status = $request->publication_status;

        $department->save();
        return redirect('/view-department')->with('massage', 'Department added Successfully');
    }

    public function editDepartment($id){
        $department= Department::find($id);
        $subjects = Subject::where('publication_status', 1)->get();

        return view('admin.department.edit-department',[
            'department'=>$department,
            'subjects'    =>  $subjects
        ]);
    }

    public function updateDepartment(Request $request){
        $department=Department::find($request->id);
        $department->subject_id = $request->subject_id;
        $department->department_name = $request->department_name;
        $department->publication_status = $request->publication_status;

        $department->save();
        return redirect('/view-department')->with('massage', 'Department updated Successfully');
    }

    public function deleteDepartment($id){
        $department = Department::find($id);
        $department->delete();
        return redirect('/view-department')->with('massage', 'Department Deleted Successfully');
    }

}
