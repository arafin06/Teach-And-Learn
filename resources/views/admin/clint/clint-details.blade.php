@extends('admin.master')



@section('body')

    <br>
    <br>
    <br>


    <div class="row">

        <div class="col-md-7" style="margin-left: 20px">
            <h1 style="text-align: center;">{{$clint->fname}} {{$clint->lname}}</h1>
            <p style="font-size: medium">
                <br><h1>{{Session::get('massage')}}</h1><br>
                <b>Email  </b>                 : {{$clint->email}}<br><br>
                <b>Phone Number   </b>         : {{$clint->mobile}}<br><br>
                <b>Skype ID </b>               : {{$clint->skyp}}<br><br>
                <b>Educational Background</b>  : {{$clint->educational_background}}<br><br>
                <b>Department </b>             : {{$clint->department}}<br><br>
                <b>Profession  </b>            : {{$clint->profession}}<br><br>
                <b>Institute  </b>             : {{$clint->institute}}<br><br>

            </p>
            <div class="panel panel-default">
                <div class="panel-body">

                    <form class="form-horizontal" action="{{route('update-clint')}}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$clint->id}}" class="form-control">

                        <div class="form-group">
                            <label class="control-label col-md-3">Verify Account</label>
                            <div class="col-md-9">
                                <input type="radio" name="verify" checked value="1"/> Verified
                                <input type="radio" name="verify" value="0"/> Unverified
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Block Account</label>
                            <div class="col-md-9">
                                <input type="radio" name="block" checked value="1"/> Unblock
                                <input type="radio" name="block" value="0"/> Block
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Client Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <img style="height: 300px; width: 250px " src="{{$clint->profile_image}}">
        </div>


    </div>






    @endsection