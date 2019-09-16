<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getMsg(Request $request){

        $contact =new Contact();
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->msg = $request->msg;

        $contact->save();

        return redirect('/')->with('massage', 'Your Massage sent successfully. Our team will contact with you soon.');
    }

    public function informationSeeker(){
        $contact = Contact::latest('id')->get();
        return view('admin.information.information-seeker',[
            'contacts'=>$contact
        ]);

    }
}
