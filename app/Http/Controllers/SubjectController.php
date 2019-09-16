<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function addSubject(){
        return view('admin.subject.add-subject');
    }

    public function viewSubject(){
        $subject = Subject::all();
        return view('admin.subject.view-subject',[
            'subjects'=>$subject
        ]);


    }
    public function newSubject(Request $request){
        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->publication_status = $request->publication_status;

        $subject->save();
        return redirect('/view-subject')->with('massage', 'Backgrounds added Successfully');
    }

    public function editSubject($id){
        $subject= Subject::find($id);
        return view('admin.subject.edit-subject',['subject'=>$subject]);
    }

    public function updateSubject(Request $request){
        $subject=Subject::find($request->id);
        $subject->subject_name = $request->subject_name;
        $subject->publication_status = $request->publication_status;
        $subject->save();
        return redirect('/view-subject')->with('massage', 'Backgrounds updated Successfully');
    }

    public function deleteSubject($id){
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/view-subject')->with('massage', 'Backgrounds Deleted Successfully');
    }


}
