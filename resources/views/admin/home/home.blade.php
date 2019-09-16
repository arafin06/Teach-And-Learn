@extends('admin.master')

@section('body')


    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Client List</h1>
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
                            <th>Clint Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th style="width: 120px">Image</th>
                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($clints as $clint)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$clint->fname}} {{$clint->lname}}</td>
                                <td>{{$clint->email}}</td>
                                <td>{{$clint->mobile}}</td>

                                <td><img src="{{$clint->profile_image}}" height="100px" width="100px"></td>






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