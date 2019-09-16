@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('update-department')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3">Select Subject</label>
                            <div class="col-md-9">
                                <select class="form-control" name="subject_id">
                                    <option>--Select Subject--</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->subject_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Department Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$department->department_name}}"  name="department_name" class="form-control"/>
                                <input type="hidden" name="id" value="{{$department->id}}" class="form-control">
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
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Department Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection