@extends('front.master')


@section('body')

    <h4 class="text-center"> @if($message=Session::get('message')) {{$message}} @endif</h4>

    <h2>WOW! You want to learn some things?</h2>

    <p style="font-size: medium">Please go through following steps.</p>

    <div class="row" style=" width: 1090px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('question')}}" method="post">
                        @csrf

                        <input type="hidden" name="clint_id" class="form-control" value="{{Session::get('clintId')}}"/>

                        <div class="form-group">
                            <label class="control-label col-md-3">Select Department</label>
                            <div class="col-md-9">
                                <select class="form-control" name="department_id">
                                    <option>--Select Department--</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}"> {{$department->department_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 " style="margin-top: 30px">Question Details</label>
                            <div class="col-md-9 " >
                                    <textarea name="question_details" class="form-control" rows="3"
                                              style="resize: vertical"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3">Requirements of Teacher</label>
                            <div class="col-md-9 " >
                                <input type="text" name="teacher_requirement" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Biding Credit</label>
                            <div class="col-md-9">
                                <input type="number" name="credit" class="form-control"/>
                            </div>
                        </div>







                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Send Question Request"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection