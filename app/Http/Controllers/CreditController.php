<?php

namespace App\Http\Controllers;

use App\BuyCredit;
use App\Clint;
use App\Credit;
use App\SellCredit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function buyCredit(){

        return view('front.credit.buy-credit');
    }

    public function creditRequest(Request $request){
       $buyCredit = new BuyCredit();

        $buyCredit->bkash_number = $request->bkash_number;
        $buyCredit->clint_id = $request->clint_id;
        $buyCredit->credit = $request->cash / 5;
        $buyCredit->cash = $request->cash;
        $buyCredit->tr_id = $request->tr_id;
        $buyCredit->status =  '0' ;

        $buyCredit->save();

        return redirect('buy-credit')->with(
            'message', 'Your Information send successfully. We will verify the information and add the credits shortly.'
            );

    }

    public function sellCredit(){
        return view('front.credit.sell-credit');
    }

    public function cashRequest(Request $request){
        $sellCredit=new SellCredit();

        $sellCredit->bkash_number = $request->bkash_number;
        $sellCredit->clint_id = $request->clint_id;
        $sellCredit->credit = $request->credit;

        $sellCredit->save();
        return redirect('sell-credit')->with('message', 'Your Information send successfully. We will verify the information
                                                            and return you money shortly');

    }










    //admin

    public function confirmCredit(){
        $buyCredit=BuyCredit::where(
            'status' , 0
        )->get();

        return view('admin.credit.confirm-credit',[
            'buyCredits'=>$buyCredit
            ]);
    }

    public function addCredit(Request $request){

        $credit= Credit::where('clint_id', $request->clint_id)->first();

        $credit->credit = $credit->credit + $request->credit ;


        $credit->save();


        $buyCredit  = BuyCredit::where('id', $request->bid)->first();

        $buyCredit->delete();



        return redirect('confirm-credit');
    }

    public function confirmCash(){
        $sellCredits=SellCredit::all();

        return view('admin.credit.confirm-cash',[
            'sellCredits'=>$sellCredits
        ]);
    }

    public function subCash(Request $request){
        $credit= Credit::where('clint_id', $request->clint_id)->first();
        $credit->credit = $credit->credit - $request->credit ;
        $credit->save();

        $sellCredit  = SellCredit::where('id', $request->sid)->first();

        $sellCredit->delete();

        return redirect('confirm-cash');
    }
}
