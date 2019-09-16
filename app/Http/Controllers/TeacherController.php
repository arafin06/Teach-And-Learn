<?php

namespace App\Http\Controllers;

use App\Bidding;
use App\Clint;
use App\Confirmation;
use App\Credit;
use App\DoneStudy;
use App\Question;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
Use Session;

class TeacherController extends Controller
{
    public function questionList(){

        $question=Question::where('publication_status', 1)->get();



        return view('front.teacher.question-list',[
            'questions'=>$question
        ]);
    }

    public function startBid(Request $request){

       $bidding = new Bidding();

        $bidding->bidder_id= $request->bidder_id;
        $bidding->question_id= $request->question_id;
        $bidding->bid_amount= $request->bid_amount;

        $bidding->save();

        return redirect('question-list')->with('massage', 'Your Bid has been sent to student.');

    }

    public function sessionTeacher(){

        $confirmation = Confirmation::where('teacher_id', Session::get('clintId'))->first();



        if($confirmation){
            $clint = Clint::where('id', $confirmation->student_id)->first();

            return view('front.teacher.acceptBit',[
                'clint' => $clint
            ]);

        }

        else{
            return view('front.teacher.acceptBit')->with('message', 'You have no session');

        }


    }

    public function teacherDone(Request $request){
        $confirmation = Confirmation::where('teacher_id', $request->teacher_id)->first();

        $question = Question::where('id', $confirmation->question_id)->first();

        $bidder = Bidding::where('question_id', $question->id)->first();

        $credit = Credit::where('clint_id',  $request->teacher_id)->first();
        $credit -> credit = $credit -> credit + $bidder->bid_amount;

        Session::put('credit', $credit->credit);

        $credit->save();

        $doneStudy = DoneStudy::where('teacher_id', $request->teacher_id)->first();

        $confirmation->delete();
        $question->delete();
        $bidder->delete();
        $doneStudy->delete();

        return redirect('question-list')->with('message', 'You teaching completed');




    }
}
