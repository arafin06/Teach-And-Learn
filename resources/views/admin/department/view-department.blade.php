@extends('admin.master')



@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Department</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <h1>{{Session::get('massage')}}</h1>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Department Name</th>
                            <th>Subject ID</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($departments as $department)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$department->department_name}}</td>
                                <td>{{$department->subject_id}}</td>

                                <td>{{$department->publication_status}}</td>
                                <td>
                                    <a href="{{route('edit-department', ['id' => $department->id])}}" class="btn btn-info btn-l">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-department', ['id' => $department->id])}}" class="btn btn-danger btn-l" onclick="return confirm('Are you sure to delete')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                            <?php $i++; ?>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection