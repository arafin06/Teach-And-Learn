@extends('front.master')

@section('body')



    <h1>{{Session::get('message')}}</h1>

    <h1>Want to buy Credits???</h1>

    <p style="font-size: medium">You need to make Bkash send money to our number and add necessary information.
                                We will verify the transition and add your credits.</p><br>


    <h2>Our Bkash Number:</h2><h2 style="color: #9d1e15"> 01779337180</h2>

    <h3>For Every 100 Taka, you will get 20 Credits</h3>

    <h3>Please Add all the information below</h3>

    <div class="row" style=" width: 1070px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('credit-request')}}" method="post">
                        @csrf



                        <div class="form-group">
                            <label class="control-label col-md-3">Your Bkash number</label>
                            <div class="col-md-9">
                                <input type="text" name="bkash_number" class="form-control"/>
                                <input type="hidden" name="clint_id" class="form-control" value="{{Session::get('clintId')}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Cash Amount</label>
                            <div class="col-md-9">
                                <input type="number" name="cash" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Transition ID</label>
                            <div class="col-md-9">
                                <input type="text" name="tr_id" class="form-control"/>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Confirm"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    @endsection