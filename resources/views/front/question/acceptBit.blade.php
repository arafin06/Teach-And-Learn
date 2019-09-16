@extends('front.master')

@section('body')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <h1>Teacher Info</h1>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <tr>
                        <td>Name</td>
                        <td>{{$clint->fname }} {{$clint->lname}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$clint->email }}</td>
                    </tr>

                    <tr>
                        <td>Contact Number</td>
                        <td>{{$clint->mobile }}</td>
                    </tr>

                    <tr>
                        <td>Skype ID</td>
                        <td>{{$clint->skyp }}</td>
                    </tr>

                    <tr>
                        <td>Educational Background</td>
                        <td>{{$clint->educational_background }}</td>
                    </tr>

                    <tr>
                        <td>Department</td>
                        <td>{{$clint->department }}</td>
                    </tr>

                    <tr>
                        <td>Profession</td>
                        <td>{{$clint->profession }}</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <form action=" {{route('student-done')}} " method="post">
                <div class="form-group">
                    <div>
                        @csrf
                        <input type="hidden" name="student_id" value="{{Session::get('clintId')}}">
                        <input type="hidden" name="teacher_id" value="{{$clint->id}}">
                        <input type="hidden" name="question_id" value="{{$question->id}}">
                        <input type="hidden" name="bid_id" value="{{$bidding->id}}">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Done Studying"/>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-4"></div>
    </div>
@endsection