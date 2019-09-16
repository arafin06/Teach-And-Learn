@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center">View Massage</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Contact Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th style="width: 40%">Massage</th>
                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($contacts as $contact)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->mobile}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->msg}}</td>

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