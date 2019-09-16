@extends('front.master')



@section('body')





    <div class="row">

        <div class="col-md-7" style="margin-left: 20px">
            <h1 style="text-align: center;">{{$clintData->fname}} {{$clintData->lname}}</h1>
            <p style="font-size: medium">
                <br><h1>{{Session::get('massage')}}</h1><br>
            <b>Email  </b>                 : {{$clintData->email}}<br><br>
            <b>Phone Number   </b>         : {{$clintData->mobile}}<br><br>
            <b>Skype ID </b>               : {{$clintData->skyp}}<br><br>
            <b>Educational Background</b>  : {{$subject->subject_name}}<br><br>
            <b>Department </b>             : {{$department->department_name}}<br><br>
            <b>Profession  </b>            : {{$clintData->profession}}<br><br>
            <b>Institute  </b>             : {{$clintData->institute}}<br><br>

            </p>

        </div>


        <div class="col-md-3">
            {{--<h3> Credit: {{$credit->credit}} </h3>--}}
            <br>  <br>  <br>  <br>  <br>  <br>  <br>
            <img style="height: 300px; width: 250px " src="{{$clintData->profile_image}}">
        </div>


    </div>


    @endsection