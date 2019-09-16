@extends('front.master')


@section('body')


    <div class="row">
        <div class="col-md-12">
            <h1>Here is Your Current Question Status</h1>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>{{Session::get('massage')}}</h1>
                    <h2>Query Details</h2>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <tr>
                                <th style="width: 200px" >Department Name</th>
                                <td>{{$department->department_name}}</td>

                            </tr>

                            <tr>
                                <th style="width: 200px" >Question Details</th>
                                <td>{{$question->question_details}}</td>

                            </tr>

                            <tr>
                                <th style="width: 200px" >Teacher Requirement</th>
                                <td>{{$question->teacher_requirement}}</td>

                            </tr>

                            <tr>
                                <th style="width: 200px" >Credit</th>
                                <td>{{$question->	credit}}</td>

                            </tr>


                        </table>
                        <!-- /.table-responsive -->

                    </div>





                </div>





            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <br>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Interested Teacger list</h2>
                    <h3>{{Session::get('message')}}</h3>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>

                            <tr>
                                <th>Name</th>
                                <th>Educational Background</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Rating</th>
                                <th>Bid Amount</th>
                                <th>Action</th>
                            </tr>


                            </thead>
                            @foreach($clints as $clint)
                            <tr>
                                <td> {{$clint->fname}} {{$clint->lname}}</td>
                                <td> {{$clint->subject_name}}</td>
                                <td> {{$clint->email}}</td>
                                <td> {{$clint->mobile}}</td>
                                <td> </td>
                                <td> {{$clint->bid_amount}}</td>
                                <td>
                                    <form action="{{ route('accept-bit') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="credit" value="{{ $clint->bid_amount }}">
                                        <input type="hidden" name="teacher_id" value="{{ $clint->id }}">
                                        <input type="hidden" name="question_id" value="{{$question->id}}">
                                        <input type="hidden" name="student_id" value="{{Session::get('clintId')}}">
                                        <input type="submit" name="btn" value="Confirm">
                                    </form>
                                </td>
                            </tr>
                            @endforeach




                        </table>
                        <!-- /.table-responsive -->

                    </div>





                </div>





            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    @endsection