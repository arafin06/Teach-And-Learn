<?php

namespace App\Http\Controllers;

use App\Clint;
use App\Credit;
use App\Department;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClintController extends Controller
{
    public function newClint(Request $request){
        $profileImage = $request->file('profile_image');
        $directory = "profile-image/";
        $imageName = $profileImage->getClientOriginalName();
        $profileImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $clint = new Clint();
        $clint->fname = $request->fname;
        $clint->lname = $request->lname;
        $clint->email = $request->email;
        $clint->mobile = $request->mobile;
        $clint->skyp = $request->skyp;
        $clint->educational_background = $request->educational_background;
        $clint->department = $request->department;
        $clint->profession = $request->profession;
        $clint->institute = $request->institute;
        $clint->profile_image = $imageUrl;
        $clint->password = bcrypt($request->password);

        $clint->verify = '0';
        $clint->block = '1';

        $clint->save();

        $credit= new Credit();
        $credit->clint_id = $clint->id;
        $credit->credit = '10';

        $credit->save();







        return redirect('/')->with('message', 'Thanks for your information. We will verify your information and active your account
                                                    shortly.');

    }

    public function logoutClint(){
        Session::forget('clintId');
        Session::forget('clintName');

        return redirect('/');
    }

    public function loginClint(Request $request){
        $clint= Clint::where('email', $request->email)->first();

        if($clint) {

            if($clint->verify== 0) {
                return redirect('/')->with('message', 'Opps! Your Account is not verified yet' );
            }
            elseif ($clint->block== 0){
                return redirect('/')->with('message', 'Opps! Your Account is Blocked! Please contact with us.' );
            }
            else{

                if (password_verify($request->password, $clint->password)) {

                    Session::put('clintId', $clint->id);
                    Session::put('image', $clint->profile_image);
                    Session::put('clintName', $clint->fname.' '.$clint->lname);

                    $clintData=Clint::find(Session::get('clintId'));
                    $credit = Credit::where('clint_id', Session::get('clintId'))->first();

                    Session::put('credit', $credit->credit);

                    return redirect('profile')->with(
                        'clintData', $clintData
                    );


                } else {
                    return redirect('/')->with('message', 'Opps! You have entered an wrong password. please insert valid password.' );
                }

            }

        }
        else{
            return redirect('/')->with('message', 'Opps! You have entered an wrong email. please insert valid email address.' );
        }


    }

    public function profile(){

        $clintData = Clint::find(Session::get('clintId'));




        $subject = Subject::where('id', $clintData->educational_background)->first();
        $department = Department::where('id', $clintData->department)->first();



        return view('front.main.main',[
            'clintData'=>$clintData,
            'subject'=>$subject,
            'department'=>$department,

            ]);
    }













    //admin


    public function clintRequest(){


        $clints = Clint::where('verify', 0)->get();

        return view('admin.clint.clint-request',['clints'=>$clints]);
    }

    public function clintList(){

        $clints = Clint::where('verify', 1)->get();

        return view('admin.clint.clint-list',[
            'clints'=>$clints
        ]);
    }

    public function clintDetails($id){
        $clint= Clint::find($id);

        return view('admin.clint.clint-details',[
            'clint'=>$clint
        ]);

    }

    public function clintUpdate(Request $request){
        $clint=Clint::find($request->id);
        $clint->verify = $request->verify;
        $clint->block = $request->block;

        $clint->save();
        return redirect('clint-list')->with('massage', 'Client Information updated Successfully');

    }


}
