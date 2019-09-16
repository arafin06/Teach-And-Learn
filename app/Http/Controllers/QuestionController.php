<?php

namespace App\Http\Controllers;

use App\Bidding;
use App\Clint;
use App\Confirmation;
use App\Credit;
use App\Department;
use App\DoneStudy;
use App\Question;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class QuestionController extends Controller
{
    public function askQuestion(){

        $subjects = Subject::where('publication_status', 1)->get();
        $departments = Department::where('publication_status', 1)->get();


        return view('front.question.ask-question',[

            'subjects'    =>  $subjects,
            'departments'    =>  $departments

            ]);
    }

    public function question(Request $request){

        Session::put('clintId', $request->clint_id);

        Credit::where('clint_id', $request->clint_id);

            $question =new Question();



        $question->clint_id = $request->clint_id;
        $question->department_id = $request->department_id;
        $question->question_details = $request->question_details;

        $question->teacher_requirement = $request->teacher_requirement;


        $question->credit = $request->credit;
        $question->publication_status = '1';

        $question->save();

        return redirect('ask-question')->with('message', 'Your Question has been uploaded. Please check On going Session 
                                                              for update');
    }

    public function sessionQuestion(){




        $question = Question::where('clint_id', Session::get('clintId'))->first();


            $department=Department::where('id', $question->department_id)->first();

//        $bidding = Bidding::where('question_id', $question->id)->get();

            $clints = DB::table('clints')
                ->join('biddings', 'clints.id', '=', 'biddings.bidder_id')
                ->join('subjects', 'clints.educational_background', '=', 'subjects.id')
                ->select('clints.*', 'subjects.subject_name', 'biddings.bid_amount')
//            ->where('questions.id', 'biddings.question_id')
                ->get();
//        $clint = Clint::where('id', $bidding->bidder_id)->first();
//
//        $subject = Subject::where('id', $clint->educational_background)->first();

            return view('front.question.ongoing-question',[
                'question'=> $question,
                'department'=>$department,
                'clints' => $clints
            ]);





    }

    public function acceptBit(Request $request){


        $check = Confirmation::where('student_id',Session::get('clintId'))->first();

        if($check){
            $clint = Clint::where('id', $check->teacher_id)->first();
            $question = Question::where('id', $check->question_id)->first();
            $bidding= Bidding::where('bidder_id', $check->teacher_id)->first();


            return view('front.question.acceptBit',[
                'clint' => $clint,
                'question'=>$question,
                'bidding'=>$bidding

            ]);
        }

        $confirmation = new Confirmation();

        $confirmation->teacher_id = $request->teacher_id;
        $confirmation->question_id = $request->question_id;
        $confirmation->student_id = $request->student_id;
        $confirmation->publication_status = 1;

        $confirmation->save();

        $question = Question::where('id', $confirmation->question_id)->first();
        $question->publication_status = 0;
        $question->save();

        $credit = Credit::where('clint_id', $confirmation->student_id)->first();

        $credit->credit = $credit->credit - $request->credit;

        Session::put('credit', $credit->credit);

        $credit->save();


        $clint = Clint::where('id', $confirmation->teacher_id)->first();

        $bidding= Bidding::where('bidder_id', $confirmation->teacher_id)->first();


        return view('front.question.acceptBit',[
            'clint' => $clint,
            'question'=>$question,
            'bidding'=>$bidding

        ]);
    }

    public function studentDone(Request $request){

        $doneStudy = new DoneStudy();


        $doneStudy->student_id = $request->student_id;
        $doneStudy->teacher_id = $request->teacher_id;
        $doneStudy->question_id = $request->question_id;
        $doneStudy->bid_id = $request->bid_id;
        $doneStudy->student_done =  1;

        $doneStudy->save();

        return redirect('ask-question')->with('message', 'Congratulation, Your Study Ended');
    }
}
