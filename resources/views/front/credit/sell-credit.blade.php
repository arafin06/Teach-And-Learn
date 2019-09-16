@extends('front.master')

@section('body')



    <h1>{{Session::get('message')}}</h1>
    <h1>Want to Sell Credits???</h1>

    <p style="font-size: medium">You need to give us a Bkash number and add necessary information.
        We will send the money via Bkash.</p><br>


    <h2>Our Bikash Number:</h2><h2 style="color: #9d1e15"> 01779337180</h2>

    <h3>For Every 25 Credits, you will get 100 taka</h3>

    <h3>Please Add all the information below</h3>

    <div class="row" style=" width: 1090px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('cash-request')}}" method="post">
                        @csrf



                        <div class="form-group">
                            <label class="control-label col-md-3">Your Bkash number</label>
                            <div class="col-md-9">
                                <input type="text" name="bkash_number" class="form-control"/>
                                <input type="hidden" name="clint_id" class="form-control" value="{{Session::get('clintId')}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Credit Amount</label>
                            <div class="col-md-9">
                                <input type="number" name="credit" class="form-control"/>
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