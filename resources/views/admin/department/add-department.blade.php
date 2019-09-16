@extends('admin.master')







@section('body')
    <br/>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Department</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('new-department')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3">Select Educational Background</label>
                            <div class="col-md-9">
                                <select class="form-control" name="subject_id">
                                    <option>--Select Educational Background--</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->subject_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Department Name</label>
                            <div class="col-md-9">
                                <input type="text" name="department_name" class="form-control"/>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <input type="radio" name="publication_status" checked value="1"/> Published
                                <input type="radio" name="publication_status" value="0"/> Unpublished
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Department Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection